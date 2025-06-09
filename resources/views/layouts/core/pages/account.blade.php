@extends('layouts.core.app')
@section('styles')
    <style>
        .ads-slider-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 12px 0;
        }

        .ads-slider-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 20px;
        }

        .ad-box {
            width: 78vw;
            height: auto;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 12px;
            padding: 12px;
            color: white;
            flex-shrink: 0;
            text-decoration: none;
        }

        .crown-main img {
            width: 40px;
        }

        .toPro {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }

        .njoy {
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    <section class="section-main section-main-ver">
        <a href="{{ route('profile') }}">
            <div class="account-profile-main ">
                <div class="account-profile-main-sub">
                    <img class="account-img"
                        src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : asset('assets/images/account-profile/account-img.jpg') }}"
                        alt="account-img" style="height: 80px;">
                    <div>
                        <h2 class="Jessica">{{ $user->name ?? 'Guest User' }}</h2>
                        <p class="Jessica-number">{{ $user->email ?? 'Not Logged In' }}</p>
                    </div>
                </div>
                <div class="edit-icon-svg">
                    <img src="assets/images/svg/right-half-arrow-black.svg" alt="right-half-arrow-black">
                </div>
            </div>
        </a>
        <div class="upgradePro-main-pro">
            <div class="ads-slider-wrapper">
                <div class="ads-slider-track" id="adsTrack">
                    @foreach ($ads as $ad)
                        <a href="{{ $ad->url }}" target="_blank" class="ad-box"
                            style="background-image: url('{{ asset('storage/' . $ad->img) }}')">
                            <div class="crown-main" style="background: none;">
                                {{-- <img src="{{ asset('assets/images/home-screen/crown.png') }}" alt="crown"> --}}
                            </div>
                            <h1 class="toPro" style="color: transparent">{{ $ad->title }}</h1>
                            <p class="njoy" style="color: transparent">Unlock complete benefits with exclusive extras!</p>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="heek">
                <a href="{{ route('plans') }}" class="upgradeNowButton">Upgrade Now</a>
            </div>
        </div>
        <a href="{{ route('profile.frames.show') }}" class="home-setting-icons-main">
            <div class="setting-opestion-main">
                <div class="setting-icons-main">
                    <img src="assets/images/svg/security.svg" alt="security">
                </div>
                <h2 class="new-notification">Frames</h2>
            </div>
            <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg" alt="right-half-arrow-black">
        </a>
        {{-- <a href="addNewCard.html" class="home-setting-icons-main">
            <div class="setting-opestion-main">
                <div class="setting-icons-main">
                    <img src="assets/images/svg/payment-method.svg" alt="payment-method">
                </div>
                <h2 class="new-notification">Payment Methods</h2>
            </div>
            <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg" alt="right-half-arrow-black">
        </a> --}}
        {{-- <a href="changeWevoicePin.html" class="home-setting-icons-main">
            <div class="setting-opestion-main">
                <div class="setting-icons-main">
                    <img src="assets/images/svg/dataPrivacy-icon.svg" alt="dataPrivacy-icon">
                </div>
                <h2 class="new-notification">Change WEvoice PIN</h2>
            </div>
            <img class="setting-arrow" src="assets/images/svg/right-half-arrow-black.svg" alt="right-half-arrow-black">
        </a> --}}
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const track = document.getElementById("adsTrack");
        const slides = document.querySelectorAll(".ad-box");
        const slideCount = slides.length;
        let index = 0;
        let startX = 0;
        let currentX = 0;
        let isDragging = false;

        function slideTo(index) {
            const offset = index * (slides[0].offsetWidth + 20); // 20 is the gap
            track.style.transform = `translateX(-${offset}px)`;
        }
        // Auto-slide every 5 seconds
        setInterval(() => {
            index = (index + 1) % slideCount;
            slideTo(index);
        }, 5000);
        // Touch/drag swipe support
        track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });
        track.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        });
        track.addEventListener('touchend', () => {
            if (!isDragging) return;
            const diff = startX - currentX;
            if (diff > 50) {
                index = Math.min(index + 1, slideCount - 1); // Swipe left
            } else if (diff < -50) {
                index = Math.max(index - 1, 0); // Swipe right
            }
            slideTo(index);
            isDragging = false;
        });
    });
</script>
