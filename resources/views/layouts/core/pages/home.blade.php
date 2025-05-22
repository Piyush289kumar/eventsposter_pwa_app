@extends('layouts.core.app')
@section('styles')
    <style>
        .grayscale-img {
            filter: grayscale(100%);
        }

        .disabled-link {
            pointer-events: none;
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>
@endsection
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
                  <h2 class="speechAi">Online Marketing</h2>
                <p class="stunni">Boost your digital presence and connect with your audience.</p>
              
                <div class="button-main start-btn">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                        aria-controls="offcanvasBottom" class="main-bg-color-btn">₹ 3499/- </a>
                </div>
            </div>
            <div class="trasnsBox voice-trans">
                <div class="tran-icons">
                    <img src="assets/images/svg/translate.svg" alt="translate">
                </div>
                  <h2 class="speechAi">Launch Your Website Today</h2>
                <p class="stunni">Transform your vision into a live digital presence.</p>
                <div class="button-main start-btn">
                    <a href="aiVoiceTranslate.html" class="main-bg-color-btn">₹ 4999/-</a>
                </div>
            </div>
        </div>
        <div class="exploAI">
            <p>Explore Posters</p>
            <a href="{{ route('posters') }}">
                <span>View all</span>
                <img src="assets/images/svg/viewallArrow.svg" alt="viewallArrow">
            </a>
        </div>




        <div class="AISlider">


            @foreach ($backgrounds as $background)
                <div class="ai-voice-car-main" style="overflow: hidden; height:auto;">
                    {{-- Image section to render and download --}}
                    <div class="PerAI-img-mains capture-img" id="capture-{{ $background->id }}"
                        style="position: relative; width: 100%; border-radius: 3%; overflow: hidden;">
                        {{-- Background image --}}
                        <img src="{{ asset('storage/' . $background->image_path) }}" alt="PerAI-img1"
                            style="width: 100%; display: block; border-radius: 3%;">
                        {{-- Frame overlay image --}}
                        <img src="{{ asset('storage/' . $frame->image_path) }}" alt="PerAI-img2"
                            style="position: absolute; bottom: 0; left: 0; width: 100%; height: auto;
                border-radius: 3%; pointer-events: none; object-fit: cover;">
                    </div>
                    <p class="olivia-name"
                        style="border-top: 1px solid #6218FF; margin-top: 5px; height: 40px; overflow: auto; padding-top: 5px;">
                        {{ $background->title ?? 'Title' }}</p>
                    <p class="olivia-lagu">{{ \Carbon\Carbon::parse($background->event_date)->format('d F Y') }}</p>
                    <p class="olivia-name" id="time-left-{{ $background->id }}" style="color:#E83F25;">
                        Time left to delete: calculating...
                    </p>
                    <div class="play-btn-selct-btn-main">
                        {{-- <div class="play-btn">
                                    <img class="play-icon" src="assets/images/svg/play-btn.svg" alt="play-btn"
                                        onclick="shareImage('capture-{{ $background->id }}')" style="cursor: pointer;">
                                </div> --}}
                        <div class="button-main select">
                            <a href="#" class="main-bg-color-btn"
                                onclick="shareImage('capture-{{ $background->id }}')" style="cursor: pointer;">
                                {{-- onclick="downloadImage('capture-{{ $background->id }}')"> --}}
                                <span class="music-graph">Download</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


            {{-- <div class="ai-voice-car-main">
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
            </div> --}}
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>


    </section>
@endsection

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    function shareImage(elementId) {
        const element = document.getElementById(elementId);
        html2canvas(element).then(canvas => {
            canvas.toBlob(blob => {
                const file = new File([blob], "shared-image.png", {
                    type: "image/png"
                });
                if (navigator.canShare && navigator.canShare({
                        files: [file]
                    })) {
                    navigator.share({
                        files: [file],
                        title: 'Shared Image',
                        text: 'Check out this image!',
                    }).then(() => {
                        showToast('✅ Image shared successfully!');
                    }).catch(error => {
                        // console.error('Sharing failed', error);
                        // showToast('⚠️ Sharing failed. Downloading instead.');
                        downloadBlob(blob, 'shared-image.png');
                    });
                } else {
                    // Fallback: download the image if sharing is not supported
                    // console.warn('Sharing not supported. Downloading image.');
                    downloadBlob(blob, 'shared-image.png');
                    showToast("📥 Image downloaded successfully!");
                }
            }, 'image/png');
        });
    }
    // function downloadImage(elementId) {
    //     const element = document.getElementById(elementId);
    //     html2canvas(element).then(canvas => {
    //         const dataUrl = canvas.toDataURL('image/png');
    //         const link = document.createElement('a');
    //         link.download = 'downloaded-image.png';
    //         link.href = dataUrl;
    //         link.click();
    //         showToast('📥 Image downloaded successfully!');
    //     });
    // }

    function downloadImage(elementId) {
        const element = document.getElementById(elementId);
        html2canvas(element).then(canvas => {
            const dataUrl = canvas.toDataURL('image/png');

            if (window.ReactNativeWebView && window.ReactNativeWebView.postMessage) {
                window.ReactNativeWebView.postMessage(dataUrl); // Send base64 image string to React Native
            } else {
                // Normal web fallback: download
                const link = document.createElement('a');
                link.download = 'downloaded-image.png';
                link.href = dataUrl;
                link.click();
                showToast('📥 Image downloaded successfully!');
            }
        });
    }


    function downloadBlob(blob, filename) {
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = filename;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }

    function showToast(message) {
        const existing = document.getElementById('custom-toast');
        if (existing) existing.remove(); // Remove previous toast if any
        const toast = document.createElement('div');
        toast.id = 'custom-toast';
        toast.innerText = message;
        toast.style.width = '75vw';
        toast.style.position = 'fixed';
        toast.style.bottom = '30px';
        toast.style.left = '50%';
        toast.style.transform = 'translateX(-50%)';
        toast.style.background = '#333';
        toast.style.color = '#fff';
        toast.style.padding = '10px 20px';
        toast.style.borderRadius = '8px';
        toast.style.boxShadow = '0 2px 6px rgba(0,0,0,0.3)';
        toast.style.zIndex = '9999';
        toast.style.fontSize = '14px';
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.3s ease-in-out';
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.opacity = '1';
        }, 50); // Fade in
        setTimeout(() => {
            toast.style.opacity = '0'; // Fade out
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }
</script>
<script>
    function getTimeLeftToDelete(id, createdAt) {
        const element = document.getElementById('time-left-' + id);
        const container = document.getElementById('capture-' + id);
        const downloadBtn = container.closest('.ai-voice-car-main').querySelector('.main-bg-color-btn');
        const images = container.querySelectorAll('img'); // both background and frame images
        function updateTime() {
            const created = new Date(createdAt);
            const expiry = new Date(created.getTime() + 3 * 24 * 60 * 60 * 1000); // +3 days
            const now = new Date();
            const diff = expiry - now;
            if (diff <= 0) {
                element.innerText = "Image Expired.";
                // Disable download button
                downloadBtn.classList.add('disabled-link');
                downloadBtn.removeAttribute('onclick');
                // Apply grayscale to both images
                images.forEach(img => {
                    img.classList.add('grayscale-img');
                });
                return;
            }
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            element.innerText = `Time left to delete: ${days}d ${hours}h ${minutes}m ${seconds}s`;
        }
        updateTime();
        setInterval(updateTime, 1000);
    }
    document.addEventListener('DOMContentLoaded', function() {
        @foreach ($backgrounds as $background)
            getTimeLeftToDelete({{ $background->id }}, '{{ $background->event_date }}');
        @endforeach
    });
</script>
