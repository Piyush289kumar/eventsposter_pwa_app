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
    <section class="section-main section-main-ver-home">
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
        @if (!$user->category)
            <div class="trasnsBox-main_ mt-0 pt-0 mb-3">
                <div class="trasnsBox speech-trans d-flex items-center" style="align-items: center">
                    <div class="tran-icons">
                        <img src="assets/images/svg/message.svg" alt="message">
                    </div>
                    <h2 class="speechAi pt-0 mt-0 mx-2">✅ पहले अपना खाता सक्रिय करें!</h2>
                </div>
                <div class="bg-danger px-3 py-3 mt-3"
                    style="border-radius: 28px; color: #fff; font-size: 18px; font-weight: 800;">
                    <p>नमस्कार {{ $user->name }} जी</p>
                    <hr>
                    <p>सर्वश्रेष्ठ Daily Poster App - KD Digi Ad में आपका हार्दिक स्वागत हैं।</p>
                    <div style="background: #fff; color:#000; border-radius: 12px; padding-bottom: 10px;">
                        <p style="background: #fff; color:#000; border-radius: 12px; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 10px;"
                            class="p-2 mt-3">
                            <span style="font-weight: 600; text-align: center;">कृपया सर्विस स्टार्ट करने हेतु
                                <br>हमसे संपर्क करें: 94795-90611</span>
                        <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
                            <!-- Phone -->
                            <a href="tel:9479590611" class="btn btn-success text-white"
                                style="font-weight: 600; display: flex; align-items: center; gap: 5px;">
                                📞 Call
                            </a>
                            <!-- WhatsApp -->
                            <a href="https://wa.me/919479590611?text=Hi%2C%20I%20am%20interested%20in%20upgrading%20to%20the%20Premium%20Tier.%20Please%20share%20details%20and%20pricing."
                                class="btn btn-success text-white"
                                style="font-weight: 600; display: flex; align-items: center; gap: 5px;" target="_blank">
                                💬 WhatsApp
                            </a>
                        </div>
                        <span style="font-weight: bold;"></span>
                        </p>
                    </div>
                    <hr>
                    <p style="font-size: 18px; font-weight: 600;">🏆 सक्रिय करने के बाद आपको क्या मिलेगा: <br>
                    <ul>
                        <li>📅 हर दिन का पोस्ट</li>
                        <li>🖼️ नए-नए फ्रेम स्टाइल</li>
                        <li>🎨 पोस्ट के साथ सुन्दर Captions + Hashtag</li>
                        <li>📨 और भी बहुत कुछ</li>
                    </ul>
                </div>
            </div>
        @endif
        <div class="trasnsBox-main">
            <div class="trasnsBox speech-trans">
                <div class="tran-icons">
                    <img src="assets/images/svg/crowen-sm.svg" alt="message">
                </div>
                <h2 class="speechAi" style="font-size: 14px; font-weight: 900; line-height: 1;">Promote Your Business/Brand
                </h2>
                <p class="stunni mt-2">
                <ul style="font-size: 11px; font-weight: 700;">
                    <li>- Lead Generation</li>
                    <li>- Business Page Setup</li>
                    <li>- Instagram & FB Ads</li>
                    <li>- Company Promotion</li>
                </ul>
                </p>
                <div class="button-main start-btn">
                    <a href="https://wa.me/919479590611?text=Hi%2C%20I%20am%20interested%20in%20Online%20Marketing%20services.%20Please%20share%20more%20details.%20%0ABoost%20your%20digital%20presence%20and%20connect%20with%20your%20audience."
                        class="main-bg-color-btn">₹ 3499/- </a>
                </div>
            </div>
            <div class="trasnsBox voice-trans">
                <div class="tran-icons">
                    <img src="assets/images/svg/website-purpule.svg" alt="translate">
                </div>
                <h2 class="speechAi" style="font-size: 14px; font-weight: 900; line-height: 1;">Launch Your Website/App</h2>
                <p class="stunni mt-2">
                <ul style="font-size: 11px; font-weight: 700;">
                    <li>- Website Development</li>
                    <li>- Software Development</li>
                    <li>- Andriod Development</li>
                    <li>- IOS Development</li>
                </ul>
                </p>
                <div class="button-main start-btn">
                    <a href="https://wa.me/919479590611?text=Hi%2C%20I%20am%20interested%20in%20the%20%E2%82%B9%204999%2F-%20Website%20Package.%20Please%20share%20more%20details%20about%20%22Launch%20Your%20Website%20Today%22%20-%20Transform%20your%20vision%20into%20a%20live%20digital%20presence."
                        class="main-bg-color-btn">₹ 4999/-</a>
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
                <div class="ai-voice-car-main mb-3" style="overflow: hidden; height: 310px;">
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
                        {{-- <img src="{{ asset('storage/' . $user_profile) }}" alt="PerAI-img2"
                            style="position: absolute; bottom: 0; right:-5; width: 50px; pointer-events: none; object-fit: contain;"> --}}
                    </div>
                    <p class="olivia-name" style="border-top: 1px solid #6218FF; margin-top: 5px;">
                        {{ $background->title ?? 'Title' }}</p>
                    <p class="olivia-lagu">{{ \Carbon\Carbon::parse($background->event_date)->format('d F Y') }}
                    </p>
                    {{-- <p class="olivia-name" id="time-left-{{ $background->id }}" style="color:#E83F25;">
                        Time left to delete: calculating...
                    </p> --}}
                    <div class="play-btn-selct-btn-main" style="align-items: start;">
                        <!-- Caption Toggle Button -->
                        <!-- Download Toggle Button -->
                        <div class="button-main select" style="width: 100%;">
                            <a href="{{ route('posters') }}" class="main-bg-color-btn toggle-download-btn p-2"
                                data-target="#download-box-{{ $background->id }}" style="width: 100%;">
                                <span class="music-graph" style="font-weight: 700;">View</span>
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
