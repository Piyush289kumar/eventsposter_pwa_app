<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function index()
    {
        $ads = Ad::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('layouts.core.pages.account', compact('ads'));
    }
}
