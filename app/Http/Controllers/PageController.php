<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function about() { return view('layouts.core.pages.aboutus'); }    
    public function logout() { return view('layouts.core.pages.logout'); }    
    public function account() { return view('layouts.core.pages.account'); }    
    public function invite() { return view('layouts.core.pages.invitefriends'); }

}




