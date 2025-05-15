@extends('layouts.core.app')

@section('content')
    <header id="top-navbar" class="site_lr-spacer back-with-text">
        <a href="javascript:history.go(-1)">
            <img class="nav-header back-btn" src="assets/images/svg/back-btn-top.svg" alt="back-btn-top">
        </a>
        <div class="header-title">
            <h1>Logout</h1>
        </div>
    </header>
    <!-- ====================================== Logout Screen Start ===================================== -->
    <section class="section-main mb-3 mt-3">
        <div class="vector-images-box">
            <img src="assets/images/vector-images/img9.png" alt="img9" style="height: 200px;">
        </div>
        <h2 class="contact-us-text-main">Logout</h2>
        <p class="ace">Are you sure you want to log out?</p>        
        <div class="button-main splash-btns-bottoms" style="display: flex; gap: 10px; margin-top: 20px;">
            <a href="{{ route('home') }}" class="skip-btn">No</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="width: 100%; padding: 12px; text-align: center; font-weight: 700;" class="main-bg-color-btn logout">
                @csrf
                <button type="submit" class="main-bg-color-btn logout">Yes, Logout</button>
            </form>

        </div>
    </section>
@endsection
