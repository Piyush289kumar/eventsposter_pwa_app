<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        return view('layouts.core.pages.aboutus');
    }
    public function logout()
    {
        return view('layouts.core.pages.logout');
    }
    public function account()
    {
        $user = Auth::user(); // Get current logged-in user

        return view('layouts.core.pages.account', [
            'user' => $user,
        ]);
    }
    public function invite()
    {
        return view('layouts.core.pages.invitefriends');
    }

}




