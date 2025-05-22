<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Frame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Illuminate\Support\Facades\File;



class PostersController extends Controller
{
    public function index()
    {
        $backgrounds = Background::where('status', true)->orderBy('created_at', 'desc')->paginate(6);
        $user_id = Auth::user()->id; // Get current logged-in user
        $frame = Frame::where('user_id', $user_id)->first();

        return view('layouts.core.pages.posters', compact('backgrounds', 'frame'));
    }



    public function downloadCombinedImage($backgroundId)
    {
        $user_id = Auth::id();
        $background = Background::findOrFail($backgroundId);
        $frame = Frame::where('user_id', $user_id)->firstOrFail();

        $backgroundPath = storage_path('app/public/' . $background->image_path);
        $framePath = storage_path('app/public/' . $frame->image_path);

        // ✅ Use GD driver explicitly
        $manager = new ImageManager(new GdDriver());

        $bgImage = $manager->read($backgroundPath);
        $frameImage = $manager->read($framePath)->resize(width: $bgImage->width(), height: 200);
        $bgImage->place($frameImage, 'bottom');


        $filename = 'combined_' . $backgroundId . '.jpg';
        $tempPath = storage_path('app/public/temp/' . $filename);
        $tempDir = storage_path('app/public/temp');
        if (!File::exists($tempDir)) {
            File::makeDirectory($tempDir, 0755, true);
        }

        $filename = 'combined_' . $backgroundId . '.jpg';
        $tempPath = $tempDir . '/' . $filename;

        $bgImage->toJpeg(100)->save($tempPath);

        return response()->download($tempPath)->deleteFileAfterSend(true);
    }


}
