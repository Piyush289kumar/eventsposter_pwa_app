@extends('layouts.core.app')

@section('content')
    <section class="section-main section-main-ver">
        <h2 class="d-none">hidden</h2>
        <div class="camera-main">
            <div class="circle-img-girl">
                <img class="profile-pic" src="assets/images/personal-info-screen/profile-img.jpg" alt="profile-img">
            </div>
            <div class="camera-img-main">
                <img class="upload-button" src="assets/images/svg/camera.svg" alt="camera">
            </div>
            <input class="file-upload" type="file" accept="image/*">
        </div>
        <div class="inpt-la-main">
            <label for="name" class="sign-text-nam">Name</label>
            <div class="sign-input-main">
                <div class="media-icons-lets">
                    <img src="assets/images/svg/person-icon.svg" alt="person-icon">
                </div>
                <input type="text" id="name" placeholder="Your Name" name="name" autocomplete="off">
            </div>
        </div>
        <div class="inpt-la-main">
            <label for="email" class="sign-text-nam">Email</label>
            <div class="sign-input-main">
                <div class="media-icons-lets">
                    <img src="assets/images/svg/email.svg" alt="email">
                </div>
                <input type="email" id="email" placeholder="Email Address" name="email" autocomplete="off">
            </div>
        </div>
        <div class="inpt-la-main">
            <label for="datepicker" class="sign-text-nam">BIRTH DATE</label>
            <div class="sign-input-main">
                <div class="media-icons-lets">
                    <img src="assets/images/svg/calendar.svg" alt="calendar">
                </div>
                <input type="text" id="datepicker" placeholder="DD/MM/YYYY" name="date" autocomplete="off">
            </div>
        </div>
        <div class="inpt-la-main">
            <label for="gender" class="sign-text-nam">GENDER</label>
            <div class="sign-input-main">
                <div class="media-icons-lets">
                    <img src="assets/images/svg/gender.svg" alt="gender">
                </div>
                <div class="custom-dropdown">
                    <input type="text" id="gender" placeholder="Select Gender" name="gender" autocomplete="off"
                        readonly>
                    <span class="dropdown-arrow">
                        <img src="assets/images/svg/dropdown.svg" alt="dropdown">
                    </span>
                    <div class="dropdown-options">
                        <div class="dropdown-option" data-value="Male">Male</div>
                        <div class="dropdown-option" data-value="Female">Female</div>
                        <div class="dropdown-option" data-value="Other">Other</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="button-main Verify-btn">
        <a href="account.html" class="main-bg-color-btn">Update Changes</a>
    </div>
@endsection
