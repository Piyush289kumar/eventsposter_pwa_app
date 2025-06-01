@extends('layouts.core.app')
@section('styles')
    <style>
        .invite-friend-wrapper {
            height: 75px;
            overflow: hidden;
            position: relative;
            border-end-start-radius: 18px;
            border-start-end-radius: 18px;
        }

        .invite-friend-wrapper img {
            position: absolute;
            bottom: 0;
            left: -5px;
            /* Always show bottom part */
            width: 70%;
            height: auto;
        }
    </style>
@endsection
@section('content')
    <section class="section-main mb-3 mt-3">
        <div class="invite-friend-full">
            @if ($frames->count() > 0)
                @foreach ($frames as $frame)
                    <div class="invite-friend-wrapper">
                        <div class="invite-imgs image-crop-bottom">
                            <img src="{{ asset('storage/' . $frame->image_path) }}" alt="friend-img">
                        </div>
                        <div class="friend-invite" style="padding-left: 25px;">
                            <div class="friend-select">
                                {{-- <label class="custom-radio-sel-friend" for="select-friend1">Active</label> --}}

                                <form action="{{ route('profile.frames.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="frame_id" value="{{ $frame->id }}">
                                    <button type="submit" class="custom-radio-sel-friend btn btn-sm" style="{{ $user->frame_id == $frame->id ? 'background: #6218FF; color:#fff' : '' }}">
                                        {{ $user->frame_id == $frame->id ? 'Selected' : 'Activate' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-info text-center">
                    No Footer Frames.
                </div>
            @endif
        </div>
    </section>
@endsection
