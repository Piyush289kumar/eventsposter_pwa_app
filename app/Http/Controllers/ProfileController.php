<?php
namespace App\Http\Controllers;
use App\Models\Frame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get current logged-in user
        return view('layouts.core.pages.profile', [
            'user' => $user,
        ]);
    }
    public function update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|email|unique:users,email,' . $user->id,
            'cropped_image' => 'nullable|string'
        ]);
        $user->name = $request->name;
        // $user->email = $request->email;
        if ($request->filled('cropped_image')) {
            $imageData = $request->input('cropped_image');
            preg_match("/^data:image\/(.*?);base64,(.*)$/", $imageData, $matches);
            $base64 = $matches[2];
            $tempFilePath = storage_path('app/temp-image.png');
            file_put_contents($tempFilePath, base64_decode($base64));

            // Send image to Remove.bg API
            $client = new Client();
            $response = $client->request('POST', 'https://api.remove.bg/v1.0/removebg', [
                'multipart' => [
                    [
                        'name' => 'image_file',
                        'contents' => fopen($tempFilePath, 'r'),
                        'filename' => 'temp.png'
                    ],
                    [
                        'name' => 'size',
                        'contents' => 'auto'
                    ],
                ],
                'headers' => [
                    'X-Api-Key' => env('REMOVE_BG_API_KEY'),
                ],
            ]);

            if ($response->getStatusCode() == 200) {
                $outputPath = 'profile-photos/' . Str::random(40) . '.png';
                Storage::disk('public')->put($outputPath, $response->getBody());

                // Delete old photo
                if ($user->profile_photo_path) {
                    Storage::disk('public')->delete($user->profile_photo_path);
                }
                $user->profile_photo_path = $outputPath;
            } else {
                return back()->withErrors(['cropped_image' => 'Failed to remove background.']);
            }
        }
        $user->save();
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    public function show_frames()
    {

        $user = Auth::user();
        $frames = Frame::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(12);

        return view('layouts.core.pages.invitefriends', [
            'frames' => $frames,
            'user' => $user,
        ]);


    }
    public function update_frames(Request $request)
    {
        $request->validate([
            'frame_id' => 'required|exists:frames,id',
        ]);

        $user = auth()->user();
        $user->frame_id = $request->frame_id;
        $user->save();

        return redirect()->route('profile.frames.show')->with('success', 'Frame updated successfully!');
    }





    //   public function update(Request $request)
    // {
    //     $user = auth()->user();
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         // 'email' => 'required|email|unique:users,email,' . $user->id,
    //         'cropped_image' => 'nullable|string'
    //     ]);
    //     $user->name = $request->name;
    //     // $user->email = $request->email;
    //     if ($request->filled('cropped_image')) {
    //         $imageData = $request->input('cropped_image');
    //         if (!preg_match("/^data:image\/(.*?);base64,(.*)$/", $imageData, $matches)) {
    //             return back()->withErrors(['cropped_image' => 'Invalid image format.']);
    //         }
    //         $extension = $matches[1]; // png, jpeg, etc.
    //         $base64 = base64_decode($matches[2]);
    //         if ($base64 === false) {
    //             return back()->withErrors(['cropped_image' => 'Failed to decode image.']);
    //         }
    //         $filename = 'profile-photos/' . Str::random(40) . '.' . $extension;
    //         Storage::disk('public')->put($filename, $base64);
    //         // Delete old image
    //         if ($user->profile_photo_path) {
    //             Storage::disk('public')->delete($user->profile_photo_path);
    //         }
    //         $user->profile_photo_path = $filename;
    //     }
    //     $user->save();
    //     return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    // }
}
