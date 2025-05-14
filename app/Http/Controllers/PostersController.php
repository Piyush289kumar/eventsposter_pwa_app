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
        $backgrounds = Background::where('status', true)->orderBy('created_at', 'desc')->get();

        $user_id = Auth::user()->id; // Get current logged-in user
        $frames = Frame::where('user_id', $user_id)->get();

        return view('layouts.core.pages.posters', compact('backgrounds', 'frames'));
    }
}
