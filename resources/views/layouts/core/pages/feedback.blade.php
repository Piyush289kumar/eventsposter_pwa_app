@extends('layouts.core.app')

@section('content')
    <section class="section-main mb-3 mt-3">
        <h2 class="d-none">hidden</h2>
        <div class="inpt-la-main">
            <label for="email" class="sign-text-nam">Email</label>
            <div class="sign-input-main projectTitle-Main">
                <input type="email" id="email" placeholder="Enter Your Email Address" name="email" autocomplete="off">
            </div>
        </div>
        <div class="inpt-la-main">
            <label for="gender" class="sign-text-nam">SUBJECT</label>
            <div class="sign-input-main projectTitle-Main">
                <div class="custom-dropdown">
                    <input type="text" id="gender" placeholder="Choose Your Subject" name="gender" autocomplete="off"
                        readonly>
                    <span class="dropdown-arrow">
                        <img src="assets/images/svg/dropdown.svg" alt="dropdown">
                    </span>
                    <div class="dropdown-options">
                        <div class="dropdown-option" data-value="Subject 1">Subject 1</div>
                        <div class="dropdown-option" data-value="Subject 2">Subject 2</div>
                        <div class="dropdown-option" data-value="Subject 3">Subject 3</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inpt-la-main">
            <label for="email" class="sign-text-nam">DESCRIPTION</label>
            <div class="sign-input-main projectTitle-Main ">
                <textarea placeholder="Write here..." name="email"></textarea>
            </div>
        </div>
    </section>
    <div class="button-main Verify-btn">
        <a href="#" class="main-bg-color-btn">Submit</a>
    </div>
@endsection
