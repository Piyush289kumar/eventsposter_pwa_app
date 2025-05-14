@extends('layouts.core.app')
@section('content')
    <section class="section-main section-main-ver">
        <h2 class="d-none">hidden</h2>
        <div class="language-select">
            <div class="filter2-mian">
                <div class="sign-input-main" id="seracg">
                    <div class="media-icons-lets">
                        <img src="assets/images/svg/search.svg" alt="search">
                    </div>
                    <input type="text" id="name" placeholder="Search" name="name" autocomplete="off">
                </div>
                {{-- <a href="filter.html" class="filter1-main-box">
                    <img src="assets/images/svg/filter2.svg" alt="filter2">
                </a> --}}
            </div>
            {{-- <div class="tab-btn-main mt-0" id="ongoing">
                <a href="javascript:void(0);" data-tab="one" class="ongoing tab-active">All AI Voices</a>
                <a href="javascript:void(0);" data-tab="two" class="ongoing">Favorites Voices</a>
                <div class="clear"></div>
            </div> --}}
            <div class="tabContainer">
                <div id="one" class="Tabcondent kueans tab-active" style="padding: 15px;">
                    {{-- <div id="one" class="Tabcondent kuean tab-active"> --}}



                    @foreach ($backgrounds as $background)
                        <div class="ai-voice-car-main mb-3">
                            <div class="flg-main-like">
                                <img class="flag" src="assets/images/svg/crowen-sm.svg"alt="flag1"
                                    style="background: #FFAA01; padding: 2px; border-radius: 50%; height: 24px; width: 24px;">
                                {{-- <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> --}}
                            </div>
                            <div class="PerAI-img-main">
                                {{-- <div class="crowen-sm">
                                <img src="assets/images/svg/crowen-sm.svg" alt="crowen-sm">
                            </div> --}}


                                <img src="{{ asset($background->image_path) }}" alt="PerAI-img1">




                            </div>
                            <p class="olivia-name">Olivia (F)</p>
                            <p class="olivia-lagu">English</p>
                            <div class="play-btn-selct-btn-main">
                                <div class="play-btn">
                                    <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                                </div>
                                <div class="button-main select">
                                    <a href="#" class="main-bg-color-btn">
                                        <span class="music-graph">Select</span>
                                        <div class="waveform-animation">
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <audio class="audio-player" src="assets/audio/music1.mp3"></audio>
                        </div>
                    @endforeach



                    {{-- Pagination links --}}
                    <div class="pagination-wrapper">
                        {{ $backgrounds->links() }}
                    </div>











                    <div class="ai-voice-car-main">
                        <div class="flg-main-like">
                            <img class="flag" src="assets/images/home-screen/flag3.jpg" alt="flag3">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="PerAI-img-main">
                            <img src="assets/images/home-screen/PerAI-img2.jpg" alt="PerAI-img2">
                        </div>
                        <p class="olivia-name">Matthew (M)</p>
                        <p class="olivia-lagu">Hindi</p>
                        <div class="play-btn-selct-btn-main">
                            <div class="play-btn">
                                <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                            </div>
                            <div class="button-main select">
                                <a href="#" class="main-bg-color-btn">
                                    <span class="music-graph">Download</span>
                                    <div class="waveform-animation">
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <audio class="audio-player" src="assets/audio/music2.mp3"></audio>
                    </div>
                    <div class="ai-voice-car-main">
                        <div class="flg-main-like">
                            <img class="flag" src="assets/images/home-screen/flag2.jpg" alt="flag2">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="PerAI-img-main">
                            <img src="assets/images/home-screen/PerAI-img3.jpg" alt="PerAI-img3">
                        </div>
                        <p class="olivia-name">Céline (F)</p>
                        <p class="olivia-lagu">French</p>
                        <div class="play-btn-selct-btn-main">
                            <div class="play-btn">
                                <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                            </div>
                            <div class="button-main select">
                                <a href="#" class="main-bg-color-btn">
                                    <span class="music-graph">Select</span>
                                    <div class="waveform-animation">
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <audio class="audio-player" src="assets/audio/music3.mp3"></audio>
                    </div>
                    <div class="ai-voice-car-main">
                        <div class="flg-main-like">
                            <img class="flag" src="assets/images/home-screen/flag4.jpg" alt="flag4">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="PerAI-img-main">
                            <div class="crowen-sm"><img src="assets/images/svg/crowen-sm.svg" alt="crowen-sm">
                            </div>
                            <img src="assets/images/home-screen/PerAI-img4.jpg" alt="PerAI-img4">
                        </div>
                        <p class="olivia-name">Brian (M)</p>
                        <p class="olivia-lagu">Arabic</p>
                        <div class="play-btn-selct-btn-main">
                            <div class="play-btn">
                                <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                            </div>
                            <div class="button-main select">
                                <a href="#" class="main-bg-color-btn">
                                    <span class="music-graph">Select</span>
                                    <div class="waveform-animation">
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <audio class="audio-player" src="assets/audio/music1.mp3"></audio>
                    </div>
                    <div class="ai-voice-car-main">
                        <div class="flg-main-like">
                            <img class="flag" src="assets/images/home-screen/flag5.jpg" alt="flag5">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="PerAI-img-main">
                            <img src="assets/images/home-screen/PerAI-img5.jpg" alt="PerAI-img5">
                        </div>
                        <p class="olivia-name">Mads (M)</p>
                        <p class="olivia-lagu">French</p>
                        <div class="play-btn-selct-btn-main">
                            <div class="play-btn">
                                <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                            </div>
                            <div class="button-main select">
                                <a href="#" class="main-bg-color-btn">
                                    <span class="music-graph">Select</span>
                                    <div class="waveform-animation">
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <audio class="audio-player" src="assets/audio/music2.mp3"></audio>
                    </div>
                    <div class="ai-voice-car-main">
                        <div class="flg-main-like">
                            <img class="flag" src="assets/images/home-screen/flag6.jpg" alt="flag6">
                            <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="PerAI-img-main">
                            <img src="assets/images/home-screen/PerAI-img6.jpg" alt="PerAI-img6">
                        </div>
                        <p class="olivia-name">Emma (F)</p>
                        <p class="olivia-lagu">Hindi</p>
                        <div class="play-btn-selct-btn-main">
                            <div class="play-btn">
                                <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                            </div>
                            <div class="button-main select">
                                <a href="#" class="main-bg-color-btn">
                                    <span class="music-graph">Select</span>
                                    <div class="waveform-animation">
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <audio class="audio-player" src="assets/audio/music3.mp3"></audio>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
