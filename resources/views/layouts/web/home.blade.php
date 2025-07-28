@extends('layouts.web.app')

@section('content')
      <!--
      Hero Section
      =============================================
      -->
        <section class="hero hero-lead pb-50" id="hero">
            <div class="hero-cotainer">
                <div class="hero-bg"> <img src="web/assets/images/background/bg-hero.svg" alt="Background Image" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="hero-content">
                                <div class="card-alert"><a class="btn" href="javascript:void(0)">update</a><span
                                        class="body">Apps update is available now</span></div>
                                <h1 class="hero-headline">Khyati Digi Ad App</h1>
                                <p class="hero-bio">At Khyati Digi Ad, we create impactful daily event posters that
                                    drive results.
                                    Our services include content writing, social media posts, and Instagram/Facebook
                                    promotions.</p>
                                <div class="hero-action"><a class="btn btn--primary"
                                        href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28.114" height="31.16"
                                            viewBox="0 0 28.114 31.16">
                                            <path id="app"
                                                d="M37.384,12.606,16.12.451A3.425,3.425,0,0,0,11,3.425V27.734a3.425,3.425,0,0,0,5.125,2.974L37.383,18.554a3.425,3.425,0,0,0,0-5.948ZM28.17,9.732,25.25,13.8,18.267,4.071ZM14.286,29.071a1.336,1.336,0,0,1-.542-.17,1.352,1.352,0,0,1-.671-1.166V3.425a1.342,1.342,0,0,1,1.212-1.339L23.971,15.58Zm3.98-1.982,6.983-9.728,2.92,4.067ZM36.353,16.75l-6.37,3.641L26.529,15.58l3.454-4.811,6.37,3.641a1.348,1.348,0,0,1,0,2.34Z"
                                                transform="translate(-10.995)"></path>
                                        </svg><span>Download</span></a></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-center items-center mx-auto">
                            <div class="hero-image"><img class="img-fluid" src="web/assets/images/mockup/iphone.png"
                                    alt="iPhone Mockup" style="height: 60rem;" /></div>
                        </div>
                    </div>
                    <!-- End .row-->
                </div>
                <!-- End .hero-cotainer-->
            </div>
            <!-- End .container-->
            <div class="skew-divider"></div>
        </section>
        <!--
      Featured Section
      =============================================
      -->
        <section class="features text-center" id="features">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <p class="heading-subtitle">our future</p>
                            <h2 class="heading-title">our amazing features</h2>
                        </div>
                    </div>
                    <!-- End .col-lg-6 -->
                </div>
                <!-- End .row  -->
                <div class="row">
                    <!-- Panel #1  -->
                    <div class="col-12 col-lg-3 ">
                        <div class="feature-panel feature-panel-1">
                            <div class="feature-icon">
                                <div class="bg-img"><img src="web/assets/images/icons/bg-icon-1.svg"
                                        alt="icon svg" /></div><img src="web/assets/images/icons/icon-code.svg"
                                    alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>app development</h3>
                                <p>We provide the best UI/UX Design by following the latest trends of the market</p>
                            </div>
                        </div>
                        <!-- End .feature-panel -->
                    </div>
                    <!-- End .col-12-->
                    <!-- Panel #2-->
                    <div class="col-12 col-lg-3 ">
                        <div class="feature-panel feature-panel-2">
                            <div class="feature-icon">
                                <div class="bg-img"><img src="web/assets/images/icons/bg-icon-2.svg"
                                        alt="icon svg" /></div><img src="web/assets/images/icons/icon-paint.svg"
                                    alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>UI/UX design</h3>
                                <p>We provide the best UI/UX Design by following the latest trends of the market</p>
                            </div>
                        </div>
                        <!-- End .feature-panel -->
                    </div>
                    <!-- End .col-12-->
                    <!-- Panel #3-->
                    <div class="col-12 col-lg-3 ">
                        <div class="feature-panel feature-panel-3">
                            <div class="feature-icon">
                                <div class="bg-img"><img src="web/assets/images/icons/bg-icon-3.svg"
                                        alt="icon svg" /></div><img src="web/assets/images/icons/icon-screen.svg"
                                    alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>website design</h3>
                                <p>We provide the best UI/UX Design by following the latest trends of the market</p>
                            </div>
                        </div>
                        <!-- End .feature-panel -->
                    </div>
                    <!-- End .col-12-->
                    <!-- Panel #4-->
                    <div class="col-12 col-lg-3 ">
                        <div class="feature-panel feature-panel-4">
                            <div class="feature-icon">
                                <div class="bg-img"><img src="web/assets/images/icons/bg-icon-4.svg"
                                        alt="icon svg" /></div><img src="web/assets/images/icons/icon-joystick.svg"
                                    alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>game development</h3>
                                <p>We provide the best UI/UX Design by following the latest trends of the market</p>
                            </div>
                        </div>
                        <!-- End .feature-panel -->
                    </div>
                    <!-- End .col-12-->
                </div>
                <!-- End .row  -->
            </div>
            <!-- End .container-->
        </section>
        <!--
      About Section
      =============================================
      -->
        <section class="about bg-pink" id="about">
            <div class="container">
                <div class="row align-items-center text-center-xs">
                    <div class="col-12 col-lg-6"><img class="img-fluid" src="web/assets/images/mockup/iphone.png"
                            alt="iPhone Mockup" style="height: 40rem;" /></div>
                    <div class="col-12 col-lg-5">
                        <div class="heading mb-40">
                            <p class="heading-subtitle">about us</p>
                            <h2 class="heading-title">Best Daily Social Media Poster App </h2>
                             <p class="sit">
            At Khyati Digi Ad, we create impactful websites, mobile apps, and daily event posters that drive results.
            Our services include content writing, social media posts, and Instagram/Facebook promotions.
        </p>
        <p class="sit">
            We focus on brand building, lead generation, and turning traffic into real conversions with creative,
            tech-driven ad campaigns.
        </p>
                        </div><a class="btn btn--bordered btn--primary" href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share">Download Now</a>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .container-->
        </section>
        <!--
      Process Section
      =============================================
      -->
        <section class="processes text-center" id="processes">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <p class="heading-subtitle">working processes</p>
                            <h2 class="heading-title">How to works </h2>
                        </div>
                    </div>
                    <!-- End .col-lg-6 -->
                </div>
                <!-- End .row -->
                <div class="process-panels-container">
                    <div class="divider"></div>
                    <div class="process-panel process-panel-1">
                        <div class="process-phase">
                            <p>step 1</p>
                        </div>
                        <h2 class="process-name">Create Account </h2>
                        {{-- <p class="process-desc">Highly targeted landing pages will increase your results, and with A/B
                            testing takes you to the next level cost per cost per acquisition. little more about your
                            product or.</p> --}}
                    </div>
                    <div class="process-panel process-panel-2">
                        <div class="process-phase">
                            <p>step 2</p>
                        </div>
                        <h2 class="process-name">Select Frame</h2>
                        {{-- <p class="process-desc">Highly targeted landing pages will increase your results, and with A/B
                            testing takes you to the next level cost per cost per acquisition. little more about your
                            product or.</p> --}}
                    </div>
                    <div class="process-panel process-panel-3">
                        <div class="process-phase">
                            <p>step 3</p>
                        </div>
                        <h2 class="process-name">Download Poster </h2>
                        {{-- <p class="process-desc">Highly targeted landing pages will increase your results, and with A/B
                            testing takes you to the next level cost per cost per acquisition. little more about your
                            product or.</p> --}}
                    </div>
                </div>
            </div>
        </section>
        <!--
      Screenshots Section
      =============================================
      -->
        <section class="screenshots bg-pink" id="screens">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-3 text-center">
                            <p class="heading-subtitle">screenshot tst</p>
                            <h2 class="heading-title">app screenshot</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel" data-slide="4" data-slide-rs="3" data-autoplay="true"
                            data-nav="false" data-dots="false" data-space="20" data-loop="true"
                            data-center="false"><img src="web/assets/images/screenshots/1.PNG"
                                alt="screenshot" /><img src="web/assets/images/screenshots/2.PNG"
                                alt="screenshot" /><img src="web/assets/images/screenshots/3.PNG"
                                alt="screenshot" /><img src="web/assets/images/screenshots/4.PNG"
                                alt="screenshot" /><img src="web/assets/images/screenshots/5.PNG"
                                alt="screenshot" /><img src="web/assets/images/screenshots/6.PNG" alt="screenshot" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
      Pricing Table Section
      =============================================
      -->
     {{-- <section class="pricing bg-clouds-red" id="pricing">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <p class="heading-subtitle">our pricing </p>
                            <h2 class="heading-title">our pricing plan</h2>
                        </div>
                    </div>
                    <!-- End .col-lg-6  -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pricing-switcher"><a class="btn active" id="monthly"
                                href="javascript:void(0)">monthly</a><a class="btn" id="yearly"
                                href="javascript:void(0)">yearly</a></div>
                    </div>
                </div>
                <!-- End .row-->
                <div class="pricing-container monthly">
                    <div class="row">
                        <!-- Start Pricing Packge #1 -->
                        <div class="col-12 col-lg-4 price-table">
                            <div class="pricing-panel monthly visible">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <h6 class="pricing-name">starter plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$24.99</p>
                                        <p class="per">per month</p>
                                    </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>awesome features</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>100 gb hosting</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start
                                        free trial</a>
                                </div>
                            </div>
                            <div class="pricing-panel yearly hidden">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <h6 class="pricing-name">starter plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$240.99</p>
                                        <p class="per">per year</p>
                                    </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>awesome features</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>100 gb hosting</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start
                                        free trial</a>
                                </div>
                            </div>
                        </div>
                        <!-- End .pricing-table  -->
                        <!-- Start Pricing Packge #2-->
                        <div class="col-12 col-lg-4 price-table">
                            <div class="pricing-panel active monthly visible">
                                <div class="pricing-head">
                                    <h6 class="pricing-name">advance plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$27.99</p>
                                        <p class="per">per month</p>
                                    </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>50GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start
                                        free trial</a>
                                </div>
                            </div>
                            <div class="pricing-panel active yearly hidden">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <h6 class="pricing-name">advance plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$270.99</p>
                                        <p class="per">per year</p>
                                    </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>50GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start
                                        free trial</a>
                                </div>
                            </div>
                        </div>
                        <!-- End .pricing-table  -->
                        <!-- Start Pricing Packge #3-->
                        <div class="col-12 col-lg-4 price-table">
                            <div class="pricing-panel monthly visible">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <h6 class="pricing-name">premium plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$33.99</p>
                                        <p class="per">per month</p>
                                    </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>100GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start
                                        free trial</a>
                                </div>
                            </div>
                            <div class="pricing-panel yearly hidden">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <h6 class="pricing-name">premium plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$33.99</p>
                                        <p class="per">per year</p>
                                    </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>100GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start
                                        free trial</a>
                                </div>
                            </div>
                        </div>
                        <!-- End .pricing-table-->
                    </div>
                </div>
                <!-- End .pricing-container-->
            </div>
            <!-- End .container-->
        </section>
        <div class="container">
            <div class="row">
                <div class="divider-2"></div>
            </div>
        </div>--}}
@endsection
