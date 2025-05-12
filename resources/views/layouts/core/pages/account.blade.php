@extends('layouts.core.app')

@section('content')
    <section class="section-main section-main-ver">
        <a href="{{route('profile')}}">
            <div class="account-profile-main ">
                <div class="account-profile-main-sub">
                    <img class="account-img" src="assets/images/account-profile/account-img.jpg" alt="account-img">
                    <div>
                        <h2 class="Jessica">Jordan Smith</h2>
                        <p class="Jessica-number">jordansmith@mail.com</p>
                    </div>
                </div>
                <div class="edit-icon-svg">
                    <img src="assets/images/svg/right-half-arrow-black.svg" alt="right-half-arrow-black">
                </div>
            </div>
        </a>
        <div class="upgradePro-main-pro">
            <div class="upgradePro-main">
                <div class="crown-main">
                    <img src="assets/images/home-screen/crown.png" alt="crown">
                </div>
                <p class="toPro">Upgrade to Pro!</p>
                <p class="njoy">Enjoy all benefits without any restrictions.</p>
            </div>
            <div class="heek">
                <a href="upgradePlan.html" class="upgradeNowButton">Upgrade Now</a>
            </div>
        </div>
        <a href="billingSubscriptions.html" class="home-setting-icons-main">
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
