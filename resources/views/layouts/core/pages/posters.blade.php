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
                                <p class="olivia-lagu">{{ \Carbon\Carbon::parse($background->event_date)->format('d F Y') }}
                                </p>
                                <p class="olivia-name" id="time-left-{{ $background->id }}" style="color:#E83F25;">
                                    Time left to delete: calculating...
                                </p>
                                <div class="play-btn-selct-btn-main" style="align-items: start;">
                                    <!-- Caption Toggle Button -->
                                    <div class="button-main select" style="width: 35%;">
                                        <button type="button" class="main-bg-color-btn bg-black toggle-caption-btn p-2"
                                            data-target="#caption-box-{{ $background->id }}" style="width: 100%;">
                                            <span class="music-graph" style="font-weight: 700; width: 100%;">Caption</span>
                                        </button>
                                    </div>
                                    <!-- Download Toggle Button -->
                                    <div class="button-main select" style="width: 65%;">
                                        <button type="button" class="main-bg-color-btn toggle-download-btn p-2"
                                            data-target="#download-box-{{ $background->id }}" style="width: 100%;">
                                            <span class="music-graph" style="font-weight: 700;">Download</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Caption Box -->
                                <div id="caption-box-{{ $background->id }}"
                                    class="caption-box main-bg-color-btn bg-black p-2"
                                    style="display: none; padding: 10px; background: #f9f9f9; border: 1px solid #ccc; margin-top: 5px;">
                                    <div style="display: flex; flex-direction: column; align-items: end;">
                                        <p class="caption-text" style="margin-bottom: 10px; width: 100%;">
                                            {{ $background->caption }}</p>
                                        <button type="button" class="copy-caption-btn btn btn-sm btn-dark"
                                            style="font-weight: 700;" data-caption="{{ $background->caption }}">
                                            📄 Copy Caption
                                        </button>
                                    </div>
                                </div>
                                <!-- Download Box -->
                                <div id="download-box-{{ $background->id }}" class="download-box main-bg-color-btn p-2"
                                    style="display: none; padding: 10px; background: #fff; border: 1px solid #ccc; margin-top: 5px;">
                                    <div style="display: flex; justify-content: center; gap: 10px;">
                                        <a href="{{ route('download.combined.poster', $background->id) }}"
                                            class="main-bg-color-btn px-5 py-2" style="font-weight: 700;">
                                            🖼️ Poster
                                        </a>
                                        @if ($background->video_path)
                                            <a href="{{ route('download.combined.poster.video', $background->id) }}"
                                                class="main-bg-color-btn px-5 py-2" style="font-weight: 700;">
                                                🎥  Reel
                                            </a>
                                        @else
                                            <button class="main-bg-color-btn btn btn-secondary" style="font-weight: 700;"
                                                disabled>
                                                🚫 No Reel
                                            </button>
                                        @endif
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
                                <div class="play-btn-selct-btn-main" style="align-items: start;">
                                    <!-- Caption Toggle Button -->
                                    <div class="button-main select" style="width: 35%;">
                                        <button type="button" class="main-bg-color-btn bg-black toggle-caption-btn p-2"
                                            data-target="#caption-box-{{ $background->id }}" style="width: 100%;">
                                            <span class="music-graph"
                                                style="font-weight: 700; width: 100%;">Caption</span>
                                        </button>
                                    </div>
                                    <!-- Download Toggle Button -->
                                    <div class="button-main select" style="width: 65%;">
                                        <button type="button" class="main-bg-color-btn toggle-download-btn p-2"
                                            data-target="#download-box-{{ $background->id }}" style="width: 100%;">
                                            <span class="music-graph" style="font-weight: 700;">Download</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Caption Box -->
                                <div id="caption-box-{{ $background->id }}"
                                    class="caption-box main-bg-color-btn bg-black p-2"
                                    style="display: none; padding: 10px; background: #f9f9f9; border: 1px solid #ccc; margin-top: 5px;">
                                    <div style="display: flex; flex-direction: column; align-items: end;">
                                        <p class="caption-text" style="margin-bottom: 10px; width: 100%;">
                                            {{ $background->caption }}</p>
                                        <button type="button" class="copy-caption-btn btn btn-sm btn-dark"
                                            style="font-weight: 700;" data-caption="{{ $background->caption }}">
                                            📄 Copy Caption
                                        </button>
                                    </div>
                                </div>
                                <!-- Download Box -->
                                <div id="download-box-{{ $background->id }}" class="download-box main-bg-color-btn p-2"
                                    style="display: none; padding: 10px; background: #fff; border: 1px solid #ccc; margin-top: 5px;">
                                    <div style="display: flex; justify-content: center; gap: 10px;">
                                        <a href="{{ route('download.combined.poster', $background->id) }}"
                                            class="main-bg-color-btn px-5 py-2" style="font-weight: 700;">
                                            🖼️ Poster
                                        </a>
                                        @if ($background->video_path)
                                            <a href="{{ route('download.combined.poster.video', $background->id) }}"
                                                class="main-bg-color-btn px-5 py-2" style="font-weight: 700;">
                                                🎥  Reel
                                            </a>
                                        @else
                                            <button class="main-bg-color-btn btn btn-secondary" style="font-weight: 700;"
                                                disabled>
                                                🚫 No Reel
                                            </button>
                                        @endif
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
                            <div class="play-btn-selct-btn-main" style="align-items: start;">
                                <!-- Caption Toggle Button -->
                                <div class="button-main select" style="width: 35%;">
                                    <button type="button" class="main-bg-color-btn bg-black toggle-caption-btn p-2"
                                        data-target="#caption-box-{{ $background->id }}" style="width: 100%;">
                                        <span class="music-graph" style="font-weight: 700; width: 100%;">Caption</span>
                                    </button>
                                </div>
                                <!-- Download Toggle Button -->
                                <div class="button-main select" style="width: 65%;">
                                    <button type="button" class="main-bg-color-btn toggle-download-btn p-2"
                                        data-target="#download-box-{{ $background->id }}" style="width: 100%;">
                                        <span class="music-graph" style="font-weight: 700;">Download</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Caption Box -->
                            <div id="caption-box-{{ $background->id }}"
                                class="caption-box main-bg-color-btn bg-black p-2"
                                style="display: none; padding: 10px; background: #f9f9f9; border: 1px solid #ccc; margin-top: 5px;">
                                <div style="display: flex; flex-direction: column; align-items: end;">
                                    <p class="caption-text" style="margin-bottom: 10px; width: 100%;">
                                        {{ $background->caption }}</p>
                                    <button type="button" class="copy-caption-btn btn btn-sm btn-dark"
                                        style="font-weight: 700;" data-caption="{{ $background->caption }}">
                                        📄 Copy Caption
                                    </button>
                                </div>
                            </div>
                            <!-- Download Box -->
                            <div id="download-box-{{ $background->id }}" class="download-box main-bg-color-btn p-2"
                                style="display: none; padding: 10px; background: #fff; border: 1px solid #ccc; margin-top: 5px;">
                                <div style="display: flex; justify-content: center; gap: 10px;">
                                    <a href="{{ route('download.combined.poster', $background->id) }}"
                                        class="main-bg-color-btn px-5 py-2" style="font-weight: 700;">
                                        🖼️ Poster
                                    </a>
                                    @if ($background->video_path)
                                        <a href="{{ route('download.combined.poster.video', $background->id) }}"
                                            class="main-bg-color-btn px-5 py-2" style="font-weight: 700;">
                                            🎥  Reel
                                        </a>
                                    @else
                                        <button class="main-bg-color-btn btn btn-secondary" style="font-weight: 700;"
                                            disabled>
                                            🚫 No Reel
                                        </button>
                                    @endif
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
{{-- <script>
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
    document.addEventListener('DOMContentLoaded', function() {
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
</script> --}}
<script>
    function getTimeLeftToDelete(id, createdAt) {
        const element = document.getElementById('time-left-' + id);
        const container = document.getElementById('capture-' + id);
        const downloadBox = document.getElementById('download-box-' + id);
        const captionBtn = document.querySelector(`[data-target="#caption-box-${id}"]`);
        const downloadBtn = document.querySelector(`[data-target="#download-box-${id}"]`);
        const downloadLinks = downloadBox ? downloadBox.querySelectorAll('a') : [];
        const fallbackButtons = downloadBox ? downloadBox.querySelectorAll('button') : [];
        const images = container ? container.querySelectorAll('img') : [];
        function updateTime() {
            const created = new Date(createdAt);
            const expiry = new Date(created.getTime() + 3 * 24 * 60 * 60 * 1000); // +3 days
            const now = new Date();
            const diff = expiry - now;
            if (diff <= 0) {
                if (element) element.innerText = "Image Expired.";
                // Disable both Caption and Download toggle buttons
                [captionBtn, downloadBtn].forEach(btn => {
                    if (btn) {
                        btn.setAttribute('disabled', 'disabled');
                        btn.classList.add('disabled');
                        btn.style.opacity = 0.5;
                        btn.style.pointerEvents = 'none';
                    }
                });
                // Hide or disable download box content
                if (downloadBox) {
                    downloadBox.style.display = 'none';
                    downloadLinks.forEach(link => {
                        link.removeAttribute('href');
                        link.classList.add('disabled');
                        link.style.pointerEvents = 'none';
                        link.style.opacity = 0.5;
                    });
                    fallbackButtons.forEach(btn => {
                        btn.setAttribute('disabled', 'disabled');
                        btn.classList.add('disabled');
                        btn.style.opacity = 0.5;
                    });
                }
                // Grayscale images
                images.forEach(img => {
                    img.classList.add('grayscale-img');
                });
                return;
            }
            // Show time left
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            if (element) {
                element.innerText = `Time left to delete: ${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        }
        updateTime();
        setInterval(updateTime, 1000);
    }
    document.addEventListener('DOMContentLoaded', function() {
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle boxes (Caption and Download)
        document.querySelectorAll('.toggle-caption-btn, .toggle-download-btn').forEach(toggleBtn => {
            toggleBtn.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const box = document.querySelector(targetId);
                if (box) {
                    $(box).slideToggle(300);
                }
            });
        });
        // Copy caption functionality
        document.querySelectorAll('.copy-caption-btn').forEach(copyBtn => {
            copyBtn.addEventListener('click', function() {
                const caption = this.getAttribute('data-caption');
                const textarea = document.createElement('textarea');
                textarea.value = caption;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                alert('Caption copied to clipboard!');
            });
        });
    });
</script>
