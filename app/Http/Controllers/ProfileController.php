<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
            if (!preg_match("/^data:image\/(.*?);base64,(.*)$/", $imageData, $matches)) {
                return back()->withErrors(['cropped_image' => 'Invalid image format.']);
            }
            $extension = $matches[1]; // png, jpeg, etc.
            $base64 = base64_decode($matches[2]);
            if ($base64 === false) {
                return back()->withErrors(['cropped_image' => 'Failed to decode image.']);
            }
            $filename = 'profile-photos/' . Str::random(40) . '.' . $extension;
            Storage::disk('public')->put($filename, $base64);
            // Delete old image
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }
            $user->profile_photo_path = $filename;
        }
        $user->save();
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
