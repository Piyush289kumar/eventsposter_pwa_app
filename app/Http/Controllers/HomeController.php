<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Frame;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get logged-in user
        $userCategoryId = $user->user_category_id;

        $frame = Frame::find($user->frame_id);
        if (!$frame) {
            $frame = Frame::where('title', 'Default')->first();
        }

        $user_profile = $user->profile_photo_path;

        $backgrounds = Background::where('status', true)
            ->whereHas(
                'categories',
                fn($query) =>
                $query->where('user_categories.id', $userCategoryId)
            )
            ->orderBy('created_at', 'desc')
            ->paginate(2);

        $ads = Ad::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();


        return view('layouts.core.pages.home', compact('backgrounds', 'frame', 'user_profile', 'user', 'ads'));
    }

    public function webHome()
    {

        return view('layouts.web.home');
    }

    public function terms()
    {
        return view('layouts.web.terms');
    }

    public function softwarePolicy()
    {
        return view('layouts.web.software-policy');
    }
    public function privacy()
    {
        return view('layouts.web.privacy');
    }
    public function childprivacy()
    {
        return view('layouts.web.childsafetypolicy');
    }


}
