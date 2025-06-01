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

use FFMpeg\FFMpeg;
use FFMpeg\Coordinate\TimeCode;
use FFMpeg\Filters\Video\VideoFilters;
use FFMpeg\Format\Video\X264;


class PostersController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get logged-in user
        $userCategoryId = $user->user_category_id;

        $frame = Frame::find($user->frame_id);

        $user_profile = $user->profile_photo_path;

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
            'frame' => $frame,
            'user_profile' => $user_profile
        ]);
    }


    // public function downloadCombinedImage($backgroundId)
    // {
    //     $user = Auth::user();
    //     $background = Background::findOrFail($backgroundId);
    //     $frame = Frame::findOrFail($user->frame_id);
    //     $user_profile = $user->profile_photo_path;

    //     $backgroundPath = storage_path('app/public/' . $background->image_path);
    //     $framePath = storage_path('app/public/' . $frame->image_path);
    //     $profilePath = storage_path('app/public/' . $user_profile);

    //     $manager = new ImageManager(new GdDriver());

    //     // Load background
    //     $bgImage = $manager->read($backgroundPath);

    //     // Resize and overlay frame
    //     $frameImage = $manager->read($framePath)->resize(
    //         width: $bgImage->width(),
    //         height: $bgImage->height()
    //     );
    //     $bgImage->place($frameImage, 'bottom');

    //     // Add profile image at bottom-right
    //     if (File::exists($profilePath)) {
    //         $profileImg = $manager->read($profilePath)->resize(150, 150); // Adjust size as needed

    //         $x = $bgImage->width() - $profileImg->width(); // Align right
    //         $y = $bgImage->height() - $profileImg->height(); // Align bottom

    //         $bgImage->place($profileImg, 'top-left', $x, $y);
    //     }

    //     // Save combined image as PNG (lossless quality)
    //     $tempDir = storage_path('app/public/temp');
    //     if (!File::exists($tempDir)) {
    //         File::makeDirectory($tempDir, 0755, true);
    //     }

    //     $filename = 'kdPosters_' . $backgroundId . '.jpg';
    //     $tempPath = $tempDir . '/' . $filename;

    //     $bgImage->toPng()->save($tempPath);

    //     return response()->download($tempPath)->deleteFileAfterSend(true);
    // }

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

        $filename = 'khyatiDigiAds_' . $backgroundId . '.jpg';
        $tempPath = $tempDir . '/' . $filename;

        $bgImage->toJpeg(100)->save($tempPath);

        return response()->download($tempPath)->deleteFileAfterSend(true);
    }



    public function downloadCombinedVideo($backgroundId)
    {
        try {
            $user_id = Auth::id();
            $background = Background::findOrFail($backgroundId);
            $frame = Frame::where('user_id', $user_id)->firstOrFail();

            $backgroundVideoPath = storage_path('app/public/' . $background->video_path);
            $overlayImagePath = storage_path('app/public/' . $frame->image_path);
            $outputPath = storage_path('app/public/temp/combined_' . $backgroundId . '.mp4');

            // Create temp directory if not exists
            $tempDir = storage_path('app/public/temp');
            if (!\File::exists($tempDir)) {
                \File::makeDirectory($tempDir, 0755, true);
            }

            // Resize overlay image to match video resolution using Intervention Image
            $ffprobe = \FFMpeg\FFProbe::create();
            $videoDimensions = $ffprobe->streams($backgroundVideoPath)
                ->videos()->first()->getDimensions();

            $manager = new ImageManager(new GdDriver());
            $resizedOverlayPath = $tempDir . '/resized_overlay_' . $backgroundId . '.png';

            $manager->read($overlayImagePath)
                ->resize($videoDimensions->getWidth(), $videoDimensions->getHeight())
                ->toPng()->save($resizedOverlayPath);

            // Setup FFmpeg and apply watermark
            $ffmpeg = FFMpeg::create();
            $video = $ffmpeg->open($backgroundVideoPath);

            $video->filters()->watermark($resizedOverlayPath, [
                'position' => 'absolute',
                'top' => 0,
                'left' => 0,
            ]);

            $format = new X264('libmp3lame', 'libx264');
            $video->save($format, $outputPath);

            return response()->download($outputPath)->deleteFileAfterSend(true);

        } catch (\Exception $e) {
            \Log::error('Failed to generate combined video: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to generate combined video'], 500);
        }
    }




}
