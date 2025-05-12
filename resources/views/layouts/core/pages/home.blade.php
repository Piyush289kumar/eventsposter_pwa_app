@extends('layouts.core.app')

@section('content')
    <section class="section-main section-main-ver-home">
        <div class="upgradePro-main-pro">
            <div class="upgradePro-main">
                <div class="crown-main">
                    <img src="assets/images/home-screen/crown.png" alt="crown">
                </div>
                <h1 class="toPro">Upgrade to Pro!</h1>
                <p class="njoy">Enjoy all benefits without any restrictions.</p>
            </div>
            <div class="heek">
                <a href="upgradePlan.html" class="upgradeNowButton">Upgrade Now</a>
            </div>
        </div>
        <div class="trasnsBox-main">
            <div class="trasnsBox speech-trans">
                <div class="tran-icons">
                    <img src="assets/images/svg/message.svg" alt="message">
                </div>
                <h2 class="speechAi">AI Text to Speech</h2>
                <p class="stunni">Convert text into stunning and accurate speech...</p>
                <div class="button-main start-btn">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                        aria-controls="offcanvasBottom" class="main-bg-color-btn">Start</a>
                </div>
            </div>
            <div class="trasnsBox voice-trans">
                <div class="tran-icons">
                    <img src="assets/images/svg/translate.svg" alt="translate">
                </div>
                <h2 class="speechAi">AI Voice Translate</h2>
                <p class="stunni">Translate your voice into another language...</p>
                <div class="button-main start-btn">
                    <a href="aiVoiceTranslate.html" class="main-bg-color-btn">Start</a>
                </div>
            </div>
        </div>
        <div class="exploAI">
            <p>Explore AI Voices</p>
            <a href="{{ route('posters') }}">
                <span>View all</span>
                <img src="assets/images/svg/viewallArrow.svg" alt="viewallArrow">
            </a>
        </div>
        <div class="AISlider ">
            <div class="ai-voice-car-main">
                <div class="flg-main-like">
                    <img class="flag" src="assets/images/home-screen/flag1.jpg" alt="flag1">
                    <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 20 20" fill="none">
                        <path
                            d="M10.516 17.3413C10.2327 17.4413 9.76602 17.4413 9.48268 17.3413C7.06602 16.5163 1.66602 13.0747 1.66602 7.24134C1.66602 4.66634 3.74102 2.58301 6.29935 2.58301C7.81602 2.58301 9.15768 3.31634 9.99935 4.44967C10.841 3.31634 12.191 2.58301 13.6993 2.58301C16.2577 2.58301 18.3327 4.66634 18.3327 7.24134C18.3327 13.0747 12.9327 16.5163 10.516 17.3413Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="PerAI-img-main">
                    <div class="crowen-sm"><img src="assets/images/svg/crowen-sm.svg" alt="crowen-sm"></div>
                    <img src="assets/images/home-screen/PerAI-img1.jpg" alt="PerAI-img1">
                </div>
                <p class="olivia-name">Olivia (F)</p>
                <p class="olivia-lagu">English</p>
                <div class="play-btn-selct-btn-main">
                    <div class="play-btn">
                        <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                    </div>
                    <div class="button-main select">
                        <a href="selectaiVoice.html" class="main-bg-color-btn">
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
                        <a href="selectaiVoice.html" class="main-bg-color-btn">
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
                        <a href="selectaiVoice.html" class="main-bg-color-btn">
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
                    <div class="crowen-sm"><img src="assets/images/svg/crowen-sm.svg" alt="crowen-sm"></div>
                    <img src="assets/images/home-screen/PerAI-img4.jpg" alt="PerAI-img4">
                </div>
                <p class="olivia-name">Brian (M)</p>
                <p class="olivia-lagu">Arabic</p>
                <div class="play-btn-selct-btn-main">
                    <div class="play-btn">
                        <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn">
                    </div>
                    <div class="button-main select">
                        <a href="selectaiVoice.html" class="main-bg-color-btn">
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
                        <a href="selectaiVoice.html" class="main-bg-color-btn">
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
                        <a href="selectaiVoice.html" class="main-bg-color-btn">
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
    </section>
@endsection
