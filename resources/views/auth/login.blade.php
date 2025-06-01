<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
            <img src="{{ asset('assets/images/svg/logo.svg') }}" alt="Logo" style="width: 150px; margin: auto;">
            <p class="loade-text" style="font-size: 40px; font-weight: 700;" data-text="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</p>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div style="display: flex; flex-direction: column; justify-content: center; margin-top: 20px;">
                <hr>
                <br>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}" {{-- href="https://wa.me/919479590611?text=Hi%2C%20I%20am%20interested%20for%20account%20registration.%20Please%20share%20details%20and%20pricing." --}} style="text-align: center; padding-top: 10px;">
                    Create a New Account
                </a>
            </div>


        </form>
    </x-authentication-card>
</x-guest-layout>
