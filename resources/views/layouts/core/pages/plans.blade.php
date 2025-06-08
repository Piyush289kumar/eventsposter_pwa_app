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

        <div class="trasnsBox-main mt-3">
            <!-- Monthly Plan -->
            <div class="trasnsBox speech-trans">

                <h2 class="speechAi">Monthly Plan</h2>
                <p class="stunni">
                <ul style="font-size: 14px; font-weight: 700;">
                    <li>- Unlimited Access</li>
                    <li>- Email Support</li>
                    <li>- Access to All Features</li>
                </ul>
                </p>
                <div class="button-main start-btn">
                    <a href="https://wa.me/919479590611?text=Hi%2C%20I%20am%20interested%20in%20the%20Monthly%20Subscription%20Plan%20%28%E2%82%B9%2049%2Fmonth%29."
                        class="main-bg-color-btn">₹ 49/month</a>
                </div>
            </div>

            <!-- 3-Month Plan -->
            <div class="trasnsBox speech-trans">

                <h2 class="speechAi">3-Month Plan</h2>
                <p class="stunni">
                <ul style="font-size: 14px; font-weight: 700;">
                    <li>- Priority Support</li>
                    <li>- Discounted Rate</li>
                    <li>- Access to New Features</li>
                </ul>
                </p>
                <div class="button-main start-btn">
                    <a href="https://wa.me/919479590611?text=Hi%2C%20I%20want%20to%20subscribe%20to%20the%203-Month%20Plan%20%28%E2%82%B9%20149%29."
                        class="main-bg-color-btn">₹ 149 / 3 Months</a>
                </div>
            </div>

            <!-- 6-Month Plan -->
            <div class="trasnsBox speech-trans">

                <h2 class="speechAi">6-Month Plan</h2>
                <p class="stunni">
                <ul style="font-size: 14px; font-weight: 700;">
                    <li>- Extended Access</li>
                    <li>- Lower Cost per Month</li>
                    <li>- Premium Features</li>
                </ul>
                </p>
                <div class="button-main start-btn">
                    <a href="https://wa.me/919479590611?text=Hi%2C%20please%20enroll%20me%20in%20the%206-Month%20Subscription%20Plan%20%28%E2%82%B9%20249%29."
                        class="main-bg-color-btn">₹ 249 / 6 Months</a>
                </div>
            </div>

            <!-- Yearly Plan -->
            <div class="trasnsBox voice-trans">
                <h2 class="speechAi">Yearly Plan</h2>
                <p class="stunni">
                <ul style="font-size: 14px; font-weight: 700;">
                    <li>- Best Value</li>
                    <li>- Full Support & Updates</li>
                    <li>- All Access Pass</li>
                </ul>
                </p>
                <div class="button-main start-btn">
                    <a href="https://wa.me/919479590611?text=Hi%2C%20I%20want%20to%20subscribe%20to%20the%20Yearly%20Plan%20%28%E2%82%B9%20346%29.%20Please%20share%20more%20details."
                        class="main-bg-color-btn">₹ 346 / Year</a>
                </div>
            </div>
        </div>


    </section>
@endsection
