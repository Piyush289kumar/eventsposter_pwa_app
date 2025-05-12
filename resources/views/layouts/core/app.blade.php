<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="assets/images/svg/favicon.svg">
    <link rel="stylesheet" href="assets/css/swap.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media_query.css">
</head>

<body>
    <div class="site_content">
        <!-- ====================================== Preloader ===================================== -->
        <div class="page-loader" id="page-loader">
            <img src="assets/images/svg/logo.svg" alt="logo">
            <p class="loade-text" data-text="WEvoice">WEvoice</p>
        </div>
        <!-- ====================================== Header ===================================== -->
        @include('layouts.core.header')


        <!-- ====================================== Home Screen Start ===================================== -->

        @yield('content')


        <!-- ====================================== Footer ===================================== -->
        @include('layouts.core.footer')
        <!-- ====================================== Setting Section ===================================== -->
        @include('layouts.core.sidenav')
        <!-- ====================================== Speech Bottom Offcanvas ===================================== -->
        <div class="offcanvas offcanvas-bottom offcanvas-texttoSpeech" tabindex="-1" id="offcanvasBottom">
            <div class="offcanvas-header offcanvas-headertexttoSpeech">
                <div class="offcanva-line" data-bs-dismiss="offcanvas"></div>
                <h3 class="offcanvas-title texttoSpeech">Create AI Text to Speech</h3>
            </div>
            <div class="offcanvas-body small">
                <div class="inpt-la-main">
                    <label for="projectTitle" class="sign-text-nam">PROJECT TITLE</label>
                    <div class="sign-input-main projectTitle-Main">
                        <input type="text" id="projectTitle" placeholder="Project Title" name="projectTitle"
                            value="YouTube Channel Video 1">
                    </div>
                    <div class="button-main projectTitle-buttons">
                        <a href="#" data-bs-dismiss="offcanvas" aria-label="Close" class="skip-btn">Cancel</a>
                        <a href="textSpeechScreen.html" class="main-bg-color-btn">Continue</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====================================== Pop Up Add Home Screen ===================================== -->
        {{-- <div id="bkgOverlay" class="backgroundOverlay"></div>
        <div id="delayedPopup" class="delayedPopupWindow">
            <a href="#" id="btnClose"><img src="assets/images/svg/x.svg" alt="x"></a>
            <div class="formDescription">
                <img src="assets/images/svg/logo.svg" alt="logo">
                <h3>WEvoice</h3>
                <p>Install WEvoice Mobile App Template to your home screen for easy access, just like any other app</p>
                <div class="home-scrren-main">
                    <a href="#">Add Home Screen</a>
                </div>
            </div>
        </div> --}}
    </div>
    <script src="assets/javascript/jquery.js"></script>
    <script src="assets/javascript/slick.min.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/audio-song-play.js"></script>
    <script src="assets/javascript/script.js"></script>
</body>

</html>
