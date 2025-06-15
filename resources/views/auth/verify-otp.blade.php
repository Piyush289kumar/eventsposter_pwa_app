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
            <img src="{{ asset('assets/images/svg/logo.png') }}" alt="Logo" style="width: 80px; margin: auto;">
            <p class="loade-text" style="font-size: 35px; font-weight: 900;"
                data-text="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</p>
        </x-slot>
        {{-- Global validation errors --}}
        <x-validation-errors class="mb-4" />
        {{-- Status message --}}
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('otp.verify') }}">
            @csrf
            {{-- Header --}}
            <div
                style="display: flex; flex-direction: column; justify-content: center; gap:20px; text-align: center; margin-bottom: 35px;">
                <a class="border border-dark rounded-3 px-3 py-3"
                    style="display:flex; border-radius: 18px; flex-direction: row; justify-content: center; align-items: center;">
                    <span style="font-size: 18px; background: #fff; border-radius: 50%; margin-right: 10px;">📞</span>
                    <span class="flex-grow-1 text-center">Login with Phone Number</span>
                </a>
            </div>
            {{-- Phone number display --}}
            <div>
                <x-label for="phone" value="{{ __('Phone Number') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone_display"
                    value="{{ old('phone', session('phone')) }}" readonly />
            </div>
            {{-- Hidden field to preserve phone number --}}
            <input type="hidden" name="phone" value="{{ old('phone', session('phone')) }}">
            {{-- OTP input --}}
            <div class="mt-4">
                <x-label for="otp" value="{{ __('Enter OTP') }}" />
                <div id="otp-group" class="flex justify-center gap-2 mt-2">
                    @for ($i = 0; $i < 6; $i++)
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                            class="h-12 text-center border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 text-xl" style="width: 50px;"
                            oninput="moveToNext(this, {{ $i }})" />
                    @endfor
                </div>

                <input type="hidden" id="otp" name="otp" />
                @error('otp')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            {{-- Remember Me --}}
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" checked />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            {{-- Submit button --}}
            <div class="flex items-center justify-center mt-4">
                <button type="submit" class="btn bg-black text-white text-sm font-bold px-3 py-2 rounded-lg">
                    Verify & Login
                </button>
            </div>
            {{-- Register link --}}
            <div style="display: flex; flex-direction: column; justify-content: center; margin-top: 20px;">
                <hr>
                <br>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}" style="text-align: center; padding-top: 10px;">
                    Create a New Account
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
<script>
    function moveToNext(el, index) {
        const inputs = document.querySelectorAll('#otp-group input');
        if (el.value.length === 1 && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
        // Reconstruct full OTP
        let otp = '';
        inputs.forEach(input => otp += input.value);
        document.getElementById('otp').value = otp;
    }
    // Optional: Auto-focus first input on load
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#otp-group input')?.focus();
    });
</script>
