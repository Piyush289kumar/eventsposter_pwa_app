<?php

namespace App\Http\Controllers;

use App\Models\Ad;
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
        $ads = Ad::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('layouts.core.pages.account', [
            'user' => $user,
            'ads' => $ads
        ]);
    }

    public function invite()
    {
        return view('layouts.core.pages.invitefriends');
    }

    public function plans()
    {
        $user = Auth::user(); // Get current logged-in user

        return view('layouts.core.pages.plans', [
            'user' => $user,
        ]);
    }

    public function privacy()
    {
        return view('layouts.core.pages.privacy');
    }
    public function childprivacy()
    {
        return view('layouts.core.pages.childsafetypolicy');
    }

}




