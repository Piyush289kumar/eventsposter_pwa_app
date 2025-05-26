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
        $user = Auth::user(); // Get logged-in user
        $userCategoryId = $user->user_category_id;

        $frame = Frame::where('user_id', $user->id)->first();
        $today = now()->format('Y-m-d');
        $tomorrow = now()->addDay()->format('Y-m-d');

        // Filter today's backgrounds by user_category_id
        $todayBackgrounds = Background::where('status', true)
            ->where('user_category_id', $userCategoryId)
            ->whereDate('event_date', $today)
            ->orderBy('created_at', 'desc')
            ->get();

        // Filter tomorrow's backgrounds
        $tomorrowBackgrounds = Background::where('status', true)
            ->where('user_category_id', $userCategoryId)
            ->whereDate('event_date', $tomorrow)
            ->orderBy('created_at', 'desc')
            ->get();

        // Filter rest backgrounds (before today)
        $restBackgrounds = Background::where('status', true)
            ->where('user_category_id', $userCategoryId)
            ->whereDate('event_date', '<', $today)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('layouts.core.pages.posters', [
            'todayBackgrounds' => $todayBackgrounds,
            'tomorrowBackgrounds' => $tomorrowBackgrounds,
            'restBackgrounds' => $restBackgrounds,
            'frame' => $frame
        ]);
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
        $frameImage = $manager->read($framePath)->resize(width: $bgImage->width(), height: $bgImage->height());
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
