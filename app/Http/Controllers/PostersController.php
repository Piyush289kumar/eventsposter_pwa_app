<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostersController extends Controller
{
    public function index()
    {
        return view('layouts.core.pages.posters');
    }
}
