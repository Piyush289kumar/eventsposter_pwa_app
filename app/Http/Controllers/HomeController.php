<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Frame;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get current logged-in user
        $userCategoryId = $user->user_category_id;

        $backgrounds = Background::where('status', true)
            ->where('user_category_id', $userCategoryId) // Filter by category
            ->orderBy('created_at', 'desc')
            ->paginate(2);

        $frame = Frame::where('user_id', $user->id)->first();

        return view('layouts.core.pages.home', compact('backgrounds', 'frame'));
    }

}
