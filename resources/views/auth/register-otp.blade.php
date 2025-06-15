<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('assets/images/svg/logo.png') }}" alt="Logo" style="width: 80px; margin: auto;">
            <p class="loade-text" style="font-size: 35px; font-weight: 900;"
                data-text="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</p>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('otp.register') }}">
            @csrf

            <input type="hidden" name="phone" value="{{ old('phone', $phone) }}">

            <div>
                <x-label for="name" value="Name" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                    value="{{ old('name') }}" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="email" value="Email" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="Password" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="Confirm Password" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button>
                    Register & Login
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
