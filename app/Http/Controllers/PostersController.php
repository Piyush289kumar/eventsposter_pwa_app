<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Frame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostersController extends Controller
{
    public function index()
    {
        $backgrounds = Background::where('status', true)->orderBy('created_at', 'desc')->paginate(1);
        $user_id = Auth::user()->id; // Get current logged-in user
        $frame = Frame::where('user_id', $user_id)->first();

        return view('layouts.core.pages.posters', compact('backgrounds', 'frame'));
    }
}
