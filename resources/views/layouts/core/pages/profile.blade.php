@extends('layouts.core.app')
@section('content')
    <form id="profileForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="section-main section-main-ver">
            <div class="camera-main" style="display: flex; justify-content: center;">
                <div class="circle-img-girl" style="height: 200px; width: 200px;">
                    <img class="profile-pic"
                        src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : asset('assets/images/account-profile/account-img.jpg') }}"
                        alt="profile-img">
                </div>
                <div class="camera-img-main" style="left:65%">
                    <img class="upload-button" src="{{ asset('assets/images/svg/camera.svg') }}" alt="camera">
                </div>
                <input class="file-upload" type="file" accept="image/*" id="profilePhotoInput" name="profile_photo">
                <input type="hidden" name="cropped_image" id="croppedImageInput"> <!-- hidden input -->
            </div>
            <div id="cropper-container" class="d-none">
                <img id="image-to-crop" style="max-width: 100%;" />
                <button type="button" id="crop-button">Crop & Set</button>
            </div>
            <div class="inpt-la-main">
                <label for="name" class="sign-text-nam">Name</label>
                <div class="sign-input-main">
                    <div class="media-icons-lets">
                        <img src="{{ asset('assets/images/svg/person-icon.svg') }}" alt="person-icon">
                    </div>
                    <input type="text" id="name" placeholder="Your Name" name="name" value="{{ $user->name }}">
                </div>
            </div>
            {{-- <div class="inpt-la-main">
                <label for="email" class="sign-text-nam">Email</label>
                <div class="sign-input-main">
                    <div class="media-icons-lets">
                        <img src="{{ asset('assets/images/svg/email.svg') }}" alt="email">
                    </div>
                    <input type="email" id="email" placeholder="Email Address" name="email"
                        value="{{ $user->email }}">
                </div>
            </div> --}}
        </section>
        <div class="button-main Verify-btn">
            <button type="submit" class="main-bg-color-btn" style="width: 100%; padding: 10px; font-weight: 750;">Update Changes</button>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        let cropper;
        const profilePhotoInput = document.getElementById('profilePhotoInput');
        const cropperContainer = document.getElementById('cropper-container');
        const imageToCrop = document.getElementById('image-to-crop');
        const cropButton = document.getElementById('crop-button');
        const croppedImageInput = document.getElementById('croppedImageInput');
        profilePhotoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    imageToCrop.src = event.target.result;
                    cropperContainer.classList.remove('d-none');
                    if (cropper) cropper.destroy(); // reset if already exists
                    cropper = new Cropper(imageToCrop, {
                        aspectRatio: 1,
                        viewMode: 1,
                    });
                };
                reader.readAsDataURL(file);
            }
        });
        cropButton.addEventListener('click', function() {
            if (cropper) {
                const canvas = cropper.getCroppedCanvas({
                    width: 200,
                    height: 200
                });
                const base64Image = canvas.toDataURL('image/png');
                croppedImageInput.value = base64Image;
                // Show the cropped image in the profile preview
                document.querySelector('.profile-pic').src = base64Image;
                cropperContainer.classList.add('d-none');
            }
        });
    </script>
@endsection
