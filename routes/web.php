<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.core.pages.home');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/about-us', [PageController::class, 'about'])->name('about');
    Route::get('/logoutcore', [PageController::class, 'logout'])->name('logoutcore');
    Route::get('/account', [PageController::class, 'account'])->name('account');
    Route::get('/invite-friends', [PageController::class, 'invite'])->name('invite');
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
    Route::get('/posters', [PostersController::class, 'index'])->name('posters');




});
