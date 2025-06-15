{{-- <form method="POST" action="{{ route('otp.verify') }}">
    @csrf
    <label>Phone Number</label>
    <input type="text" name="phone" value="{{ session('phone') }}" readonly>

    <label>Enter OTP</label>
    <input type="text" name="otp" required>

    <button type="submit">Verify & Login</button>
</form> --}}



<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
            <img src="{{ asset('assets/images/svg/logo.png') }}" alt="Logo" style="width: 120px; margin: auto;">
            <p class="loade-text" style="font-size: 40px; font-weight: 700;"
                data-text="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</p>
        </x-slot>
        <x-validation-errors class="mb-4" />
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form method="POST" action="{{ route('otp.verify') }}">
            @csrf
            <div
                style="display: flex; flex-direction: column; justify-content: center; gap:20px; text-align: center; margin-bottom: 35px;">
                <a class="border border-dark rounded-3 px-3 py-3"
                    style="display:flex; border-radius: 18px; flex-direction: row; justify-content: center; align-items: center;">
                    <span style="font-size: 18px; background: #fff;  border-radius: 50%; margin-right: 10px;;">📞</span>
                    <span class="flex-grow-1 text-center">Login with Phone Number</span>
                </a>
            </div>
            <div>
                <x-label for="Phone Number" value="{{ __('Phone Number') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                    value="{{ session('phone') }}" readonly />
            </div>

            <div>
                <x-label for="Enter OTP" value="{{ __('Enter OTP') }}"  class="mt-2"/>
                <x-input id="otp" class="block mt-1 w-full" type="text" name="otp" required autofocus
                    autocomplete="off" />
            </div>


            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-center mt-4">
                <button type="submit" class="btn bg-black text-white text-sm font-bold px-3 py-2 rounded-lg">
                    Verify & Login
                </button>
            </div>
            <div style="display: flex; flex-direction: column; justify-content: center; margin-top: 20px;">
                <hr>
                <br>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}" {{-- href="https://wa.me/919479590611?text=Hi%2C%20I%20am%20interested%20for%20account%20registration.%20Please%20share%20details%20and%20pricing." --}}
                    style="text-align: center; padding-top: 10px;">
                    Create a New Account
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
