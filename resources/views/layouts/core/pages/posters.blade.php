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
    <section class="section-main section-main-ver">
        <h2 class="d-none">hidden</h2>
        <div class="language-select">
            <div class="tabContainer mb-5 pb-5">
                <div id="one" class="Tabcondent kueans tab-active" style="padding: 1px;">



                    {{-- Today's Posters --}}

                    <div class="trasnsBox-main_ mt-0 pt-0 mb-3">
                        <div class="trasnsBox speech-trans d-flex items-center" style="align-items: center">
                            <div class="tran-icons">
                                <img src="assets/images/svg/message.svg" alt="message">
                            </div>
                            <h2 class="speechAi pt-0 mt-0 mx-2">आज के पोस्टर / Today's Poster</h2>
                        </div>
                    </div>

                    @if ($todayBackgrounds->count() > 0)
                    @foreach ($todayBackgrounds as $background)
                        <div class="ai-voice-car-main mb-3" style="overflow: hidden;">
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
                            <p class="olivia-name" style="border-top: 1px solid #6218FF; margin-top: 5px;">
                                {{ $background->title ?? 'Title' }}</p>
                            <p class="olivia-lagu">{{ \Carbon\Carbon::parse($background->event_date)->format('d F Y') }}</p>
                            <p class="olivia-name" id="time-left-{{ $background->id }}" style="color:#E83F25;">
                                Time left to delete: calculating...
                            </p>
                            <div class="play-btn-selct-btn-main">
                                <div class="button-main select">
                                    <a href="{{ route('download.combined.poster', $background->id) }}"
                                        class="main-bg-color-btn">
                                        <span class="music-graph">Download</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                      @else
                        <div class="alert alert-info text-center">
                            आज के पोस्टर नहीं हैं / No Posters For Today.
                        </div>
                    @endif

                    {{-- Tommorow Posters --}}

                    <div class="trasnsBox-main_ mt-0 pt-0 mb-3">
                        <div class="trasnsBox voice-trans d-flex items-center" style="align-items: center">
                            <div class="tran-icons">
                                <img src="assets/images/svg/message.svg" alt="message">
                            </div>
                            <h2 class="speechAi pt-0 mt-0 mx-2">कल के पोस्टर / Tomorrow's Poster</h2>
                        </div>
                    </div>


                    {{-- <div id="one" class="Tabcondent kuean tab-active"> --}}
                    @if ($tomorrowBackgrounds->count() > 0)
                        @foreach ($tomorrowBackgrounds as $background)
                            <div class="ai-voice-car-main mb-3" style="overflow: hidden;">
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
                                <p class="olivia-name" style="border-top: 1px solid #6218FF; margin-top: 5px;">
                                    {{ $background->title ?? 'Title' }}</p>
                                <p class="olivia-lagu">
                                    {{ \Carbon\Carbon::parse($background->event_date)->format('d F Y') }}
                                </p>
                                <p class="olivia-name" id="time-left-{{ $background->id }}" style="color:#E83F25;">
                                    Time left to delete: calculating...
                                </p>
                                <div class="play-btn-selct-btn-main">
                                    <div class="button-main select">
                                        <a href="{{ route('download.combined.poster', $background->id) }}"
                                            class="main-bg-color-btn">
                                            <span class="music-graph">Download</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info text-center">
                            कल के पोस्टर नहीं हैं / No Posters For Tomorrow.
                        </div>
                    @endif


                    {{-- Rest Posters --}}

                    <div class="trasnsBox-main_ mt-0 pt-0 mb-3">
                        <div class="trasnsBox voice-trans d-flex items-center" style="align-items: center">
                            <div class="tran-icons">
                                <img src="assets/images/svg/message.svg" alt="message">
                            </div>
                            <h2 class="speechAi pt-0 mt-0 mx-2">बाकी के पोस्टर / Rest's Poster</h2>
                        </div>
                    </div>
                    @foreach ($restBackgrounds as $background)
                        <div class="ai-voice-car-main mb-3" style="overflow: hidden;">
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
                            <p class="olivia-name" style="border-top: 1px solid #6218FF; margin-top: 5px;">
                                {{ $background->title ?? 'Title' }}</p>
                            <p class="olivia-lagu">{{ \Carbon\Carbon::parse($background->event_date)->format('d F Y') }}
                            </p>
                            <p class="olivia-name" id="time-left-{{ $background->id }}" style="color:#E83F25;">
                                Time left to delete: calculating...
                            </p>
                            <div class="play-btn-selct-btn-main">
                                <div class="button-main select">
                                    <a href="{{ route('download.combined.poster', $background->id) }}"
                                        class="main-bg-color-btn">
                                        <span class="music-graph">Download</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination links --}}
                    <div class="pagination-wrapper w-full" style="display: flex; justify-content: center;">
                        {{ $restBackgrounds->links('pagination::bootstrap-4') }}
                    </div>


                </div>
            </div>
        </div>

    </section>
@endsection
{{-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
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

            // Check if inside React Native WebView
            if (window.ReactNativeWebView && window.ReactNativeWebView.postMessage) {
                window.ReactNativeWebView.postMessage(dataUrl); // send base64 to app
            } else {
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
</script> --}}
{{-- <script>
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
        @foreach ($restBackgrounds as $background)
            getTimeLeftToDelete({{ $background->id }}, '{{ $background->event_date }}');
        @endforeach
    });
</script> --}}

<script>
    function getTimeLeftToDelete(id, createdAt) {
        const element = document.getElementById('time-left-' + id);
        const container = document.getElementById('capture-' + id);
        const downloadBtn = container.closest('.ai-voice-car-main').querySelector('.main-bg-color-btn');
        const images = container.querySelectorAll('img');

        function updateTime() {
            const created = new Date(createdAt);
            const expiry = new Date(created.getTime() + 3 * 24 * 60 * 60 * 1000); // +3 days
            const now = new Date();
            const diff = expiry - now;

            if (diff <= 0) {
                element.innerText = "Image Expired.";
                downloadBtn.classList.add('disabled-link');
                downloadBtn.removeAttribute('href');
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

    document.addEventListener('DOMContentLoaded', function () {
        @foreach ($todayBackgrounds as $background)
            getTimeLeftToDelete({{ $background->id }}, '{{ $background->event_date }}');
        @endforeach

        @foreach ($tomorrowBackgrounds as $background)
            getTimeLeftToDelete({{ $background->id }}, '{{ $background->event_date }}');
        @endforeach

        @foreach ($restBackgrounds as $background)
            getTimeLeftToDelete({{ $background->id }}, '{{ $background->event_date }}');
        @endforeach
    });
</script>
