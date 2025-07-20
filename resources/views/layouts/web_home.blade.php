<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ayman Fikry" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Multi-purpose Application landing page HTML5 template" />
    <title>Khyati Digi Ad</title>
    <link href="assets/images/svg/logo.png" rel="icon" />
    <!--  Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <!--  Stylesheets-->
    <link href="web/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="web/assets/css/style.css" rel="stylesheet" />
    <!-- Google Tag Manager-->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MDF43VH');
    </script>
    <!-- End Google Tag Manager-->
    <script data-cfasync="false" nonce="59ada94b-585d-488e-b0e0-124adcdde0b5">
        try {
            (function(w, d) {
                ! function(fv, fw, fx, fy) {
                    if (fv.zaraz) console.error("zaraz is loaded twice");
                    else {
                        fv[fx] = fv[fx] || {};
                        fv[fx].executed = [];
                        fv.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        fv.zaraz._v = "5858";
                        fv.zaraz._n = "59ada94b-585d-488e-b0e0-124adcdde0b5";
                        fv.zaraz.q = [];
                        fv.zaraz._f = function(fz) {
                            return async function() {
                                var fA = Array.prototype.slice.call(arguments);
                                fv.zaraz.q.push({
                                    m: fz,
                                    a: fA
                                })
                            }
                        };
                        for (const fB of ["track", "set", "debug"]) fv.zaraz[fB] = fv.zaraz._f(fB);
                        fv.zaraz.init = () => {
                            var fC = fw.getElementsByTagName(fy)[0],
                                fD = fw.createElement(fy),
                                fE = fw.getElementsByTagName("title")[0];
                            fE && (fv[fx].t = fw.getElementsByTagName("title")[0].text);
                            fv[fx].x = Math.random();
                            fv[fx].w = fv.screen.width;
                            fv[fx].h = fv.screen.height;
                            fv[fx].j = fv.innerHeight;
                            fv[fx].e = fv.innerWidth;
                            fv[fx].l = fv.location.href;
                            fv[fx].r = fw.referrer;
                            fv[fx].k = fv.screen.colorDepth;
                            fv[fx].n = fw.characterSet;
                            fv[fx].o = (new Date).getTimezoneOffset();
                            if (fv.dataLayer)
                                for (const fF of Object.entries(Object.entries(dataLayer).reduce(((fG, fH) => ({
                                        ...fG[1],
                                        ...fH[1]
                                    })), {}))) zaraz.set(fF[0], fF[1], {
                                    scope: "page"
                                });
                            fv[fx].q = [];
                            for (; fv.zaraz.q.length;) {
                                const fI = fv.zaraz.q.shift();
                                fv[fx].q.push(fI)
                            }
                            fD.defer = !0;
                            for (const fJ of [localStorage, sessionStorage]) Object.keys(fJ || {}).filter((fL => fL
                                .startsWith("_zaraz_"))).forEach((fK => {
                                try {
                                    fv[fx]["z_" + fK.slice(7)] = JSON.parse(fJ.getItem(fK))
                                } catch {
                                    fv[fx]["z_" + fK.slice(7)] = fJ.getItem(fK)
                                }
                            }));
                            fD.referrerPolicy = "origin";
                            fD.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(fv[fx])));
                            fC.parentNode.insertBefore(fD, fC)
                        };
                        ["complete", "interactive"].includes(fw.readyState) ? zaraz.init() : fv.addEventListener(
                            "DOMContentLoaded", zaraz.init)
                    }
                }(w, d, "zarazData", "script");
                window.zaraz._p = async eC => new Promise((eD => {
                    if (eC) {
                        eC.e && eC.e.forEach((eE => {
                            try {
                                const eF = d.querySelector("script[nonce]"),
                                    eG = eF ? .nonce || eF ? .getAttribute("nonce"),
                                    eH = d.createElement("script");
                                eG && (eH.nonce = eG);
                                eH.innerHTML = eE;
                                eH.onload = () => {
                                    d.head.removeChild(eH)
                                };
                                d.head.appendChild(eH)
                            } catch (eI) {
                                console.error(`Error executing script: ${eE}\n`, eI)
                            }
                        }));
                        Promise.allSettled((eC.f || []).map((eJ => fetch(eJ[0], eJ[1]))))
                    }
                    eD()
                }));
                zaraz._p({
                    "e": ["(function(w,d){})(window,document)"]
                });
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body class="body-scroll">
    <!--  Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDF43VH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
        <!--
      Header
      =============================================
      -->
        <header class="header header-light header-sticky">
            <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
                <div class="container"> <a class="logo navbar-brand" href="index.html"><img class="logo logo-dark"
                            src="assets/images/svg/logo.png" alt="LadidApp Logo" style="width: 50px;" /><img
                            class="logo logo-light" src="assets/images/svg/logo.png" alt="Khyati Digi Ad"
                            style="width: 50px;" /> <span style="font-weight:800; font-size: 25px;">Khyati Digi
                            Ad</span></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarContent" aria-expanded="false"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo"
                                    href="#hero">Home</a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo"
                                    href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo"
                                    href="#screens">screenshots</a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#pricing">pricing</a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#privacy-policy">Policy</a></li>
                        </ul>
                        <div class="module-container">
                            <!--module-btn-->
                            <div class="module module-cta"><a class="btn" href="{{ route('home') }}"
                                    data-scroll="scrollTo"
                                    href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share">
                                    <span>Download</span></a></div>
                        </div>
                        <!-- End Module Container  -->
                    </div>
                    <!-- End .nav-collapse-->
                </div>
                <!-- End .container-->
            </nav>
            <!-- End .navbar-->
        </header>
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
                        <div class="col-12 col-lg-6">
                            <div class="hero-image"><img class="img-fluid" src="web/assets/images/mockup/iphone.png"
                                    alt="iPhone Mockup" /></div>
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
                    <div class="col-12 col-lg-6"><img class="img-fluid" src="web/assets/images/cover/about.png"
                            alt="Book Cover" /></div>
                    <div class="col-12 col-lg-5">
                        <div class="heading mb-40">
                            <p class="heading-subtitle">about us</p>
                            <h2 class="heading-title">Best Financing App in The World</h2>
                            <p class="heading-desc">Best financing app ever in the world. Easy to use and very user
                                friendly for mobile banking. You can control your card easily and send money some one
                                just one click.</p>
                        </div><a class="btn btn--bordered btn--primary" href="javascript:void(0)">read more</a>
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
                        <h2 class="process-name">start your campaign </h2>
                        <p class="process-desc">Highly targeted landing pages will increase your results, and with A/B
                            testing takes you to the next level cost per cost per acquisition. little more about your
                            product or.</p>
                    </div>
                    <div class="process-panel process-panel-2">
                        <div class="process-phase">
                            <p>step 2</p>
                        </div>
                        <h2 class="process-name">engage new users</h2>
                        <p class="process-desc">Stop wasting money on more traffi. Get more leads on your existing
                            traffic instead. At the end, this improves your ROI significantly. convince them to use your
                            game</p>
                    </div>
                    <div class="process-panel process-panel-3">
                        <div class="process-phase">
                            <p>step 3</p>
                        </div>
                        <h2 class="process-name">claim your reward </h2>
                        <p class="process-desc">Higher conversion rates means you get more business from your cur in
                            rent traffic and reduce cost peple cost per acquisition.this improves your ROI
                            significantly.</p>
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
                            <p class="heading-subtitle">screenshot</p>
                            <h2 class="heading-title">app screenshot</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel" data-slide="4" data-slide-rs="3" data-autoplay="true"
                            data-nav="false" data-dots="false" data-space="20" data-loop="true"
                            data-center="false"><img src="web/assets/images/screenshots/1.png"
                                alt="screenshot" /><img src="web/assets/images/screenshots/2.png"
                                alt="screenshot" /><img src="web/assets/images/screenshots/3.png"
                                alt="screenshot" /><img src="web/assets/images/screenshots/4.png"
                                alt="screenshot" /><img src="web/assets/images/screenshots/5.png"
                                alt="screenshot" /><img src="web/assets/images/screenshots/6.png"
                                alt="screenshot" /><img src="web/assets/images/screenshots/7.png" alt="screenshot" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
      Pricing Table Section
      =============================================
      -->
        <section class="pricing bg-clouds-red" id="pricing">
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
        </div>





        <!--
      About Section
      =============================================
      -->
        <section class="about bg-pink" id="privacy-policy">
            <div class="container">
                <div class="row align-items-center text-center-xs">
                    <div class="col-12 ">
                        <div class="heading mb-40">
                            <p class="heading-subtitle">Privacy Policy</p>
                            <h1>Privacy Policy</h1>
                            <p>Last updated: June 09, 2025</p>
                            <p>This Privacy Policy describes Our policies and procedures on the collection, use and
                                disclosure of Your
                                information when You use the Service and tells You about Your privacy rights and how the
                                law protects You.</p>
                            <p>We use Your Personal data to provide and improve the Service. By using the Service, You
                                agree to the collection
                                and use of information in accordance with this Privacy Policy. This Privacy Policy has
                                been created with the
                                help of the <a href="https://www.termsfeed.com/privacy-policy-generator/"
                                    target="_blank">Privacy Policy
                                    Generator</a>.</p>
                            <h2>Interpretation and Definitions</h2>
                            <h3>Interpretation</h3>
                            <p>The words of which the initial letter is capitalized have meanings defined under the
                                following conditions. The
                                following definitions shall have the same meaning regardless of whether they appear in
                                singular or in plural.
                            </p>
                            <h3>Definitions</h3>
                            <p>For the purposes of this Privacy Policy:</p>
                            <ul>
                                <li>
                                    <p><strong>Account</strong> means a unique account created for You to access our
                                        Service or parts of our
                                        Service.</p>
                                </li>
                                <li>
                                    <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is
                                        under common control
                                        with a party, where &quot;control&quot; means ownership of 50% or more of the
                                        shares, equity interest or
                                        other securities entitled to vote for election of directors or other managing
                                        authority.</p>
                                </li>
                                <li>
                                    <p><strong>Application</strong> refers to Khyati Digi Ad, the software program
                                        provided by the Company.</p>
                                </li>
                                <li>
                                    <p><strong>Company</strong> (referred to as either &quot;the Company&quot;,
                                        &quot;We&quot;, &quot;Us&quot;
                                        or &quot;Our&quot; in this Agreement) refers to Khyati Digi Ad.</p>
                                </li>
                                <li>
                                    <p><strong>Cookies</strong> are small files that are placed on Your computer, mobile
                                        device or any other
                                        device by a website, containing the details of Your browsing history on that
                                        website among its many
                                        uses.</p>
                                </li>
                                <li>
                                    <p><strong>Country</strong> refers to: Madhya Pradesh, India</p>
                                </li>
                                <li>
                                    <p><strong>Device</strong> means any device that can access the Service such as a
                                        computer, a cellphone or a
                                        digital tablet.</p>
                                </li>
                                <li>
                                    <p><strong>Personal Data</strong> is any information that relates to an identified
                                        or identifiable
                                        individual.</p>
                                </li>
                                <li>
                                    <p><strong>Service</strong> refers to the Application or the Website or both.</p>
                                </li>
                                <li>
                                    <p><strong>Service Provider</strong> means any natural or legal person who processes
                                        the data on behalf of
                                        the Company. It refers to third-party companies or individuals employed by the
                                        Company to facilitate the
                                        Service, to provide the Service on behalf of the Company, to perform services
                                        related to the Service or
                                        to assist the Company in analyzing how the Service is used.</p>
                                </li>
                                <li>
                                    <p><strong>Usage Data</strong> refers to data collected automatically, either
                                        generated by the use of the
                                        Service or from the Service infrastructure itself (for example, the duration of
                                        a page visit).</p>
                                </li>
                                <li>
                                    <p><strong>Website</strong> refers to Khyati Digi Ad, accessible from <a
                                            href="https://khyatidigital.com/" rel="external nofollow noopener"
                                            target="_blank">https://khyatidigital.com/</a></p>
                                </li>
                                <li>
                                    <p><strong>You</strong> means the individual accessing or using the Service, or the
                                        company, or other legal
                                        entity on behalf of which such individual is accessing or using the Service, as
                                        applicable.</p>
                                </li>
                            </ul>
                            <h2>Collecting and Using Your Personal Data</h2>
                            <h3>Types of Data Collected</h3>
                            <h4>Personal Data</h4>
                            <p>While using Our Service, We may ask You to provide Us with certain personally
                                identifiable information that can
                                be used to contact or identify You. Personally identifiable information may include, but
                                is not limited to:</p>
                            <ul>
                                <li>
                                    <p>Email address</p>
                                </li>
                                <li>
                                    <p>First name and last name</p>
                                </li>
                                <li>
                                    <p>Phone number</p>
                                </li>
                                <li>
                                    <p>Usage Data</p>
                                </li>
                            </ul>
                            <h4>Usage Data</h4>
                            <p>Usage Data is collected automatically when using the Service.</p>
                            <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g.
                                IP address), browser
                                type, browser version, the pages of our Service that You visit, the time and date of
                                Your visit, the time spent
                                on those pages, unique device identifiers and other diagnostic data.</p>
                            <p>When You access the Service by or through a mobile device, We may collect certain
                                information automatically,
                                including, but not limited to, the type of mobile device You use, Your mobile device
                                unique ID, the IP address
                                of Your mobile device, Your mobile operating system, the type of mobile Internet browser
                                You use, unique device
                                identifiers and other diagnostic data.</p>
                            <p>We may also collect information that Your browser sends whenever You visit our Service or
                                when You access the
                                Service by or through a mobile device.</p>
                            <h4>Tracking Technologies and Cookies</h4>
                            <p>We use Cookies and similar tracking technologies to track the activity on Our Service and
                                store certain
                                information. Tracking technologies used are beacons, tags, and scripts to collect and
                                track information and to
                                improve and analyze Our Service. The technologies We use may include:</p>
                            <ul>
                                <li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your
                                    Device. You can
                                    instruct Your browser to refuse all Cookies or to indicate when a Cookie is being
                                    sent. However, if You do
                                    not accept Cookies, You may not be able to use some parts of our Service. Unless you
                                    have adjusted Your
                                    browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
                                <li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may
                                    contain small electronic
                                    files known as web beacons (also referred to as clear gifs, pixel tags, and
                                    single-pixel gifs) that permit
                                    the Company, for example, to count users who have visited those pages or opened an
                                    email and for other
                                    related website statistics (for example, recording the popularity of a certain
                                    section and verifying system
                                    and server integrity).</li>
                            </ul>
                            <p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies
                                remain on Your personal
                                computer or mobile device when You go offline, while Session Cookies are deleted as soon
                                as You close Your web
                                browser. You can learn more about cookies on <a
                                    href="https://www.termsfeed.com/blog/cookies/#What_Are_Cookies"
                                    target="_blank">TermsFeed website</a> article.</p>
                            <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
                            <ul>
                                <li>
                                    <p><strong>Necessary / Essential Cookies</strong></p>
                                    <p>Type: Session Cookies</p>
                                    <p>Administered by: Us</p>
                                    <p>Purpose: These Cookies are essential to provide You with services available
                                        through the Website and to
                                        enable You to use some of its features. They help to authenticate users and
                                        prevent fraudulent use of
                                        user accounts. Without these Cookies, the services that You have asked for
                                        cannot be provided, and We
                                        only use these Cookies to provide You with those services.</p>
                                </li>
                                <li>
                                    <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
                                    <p>Type: Persistent Cookies</p>
                                    <p>Administered by: Us</p>
                                    <p>Purpose: These Cookies identify if users have accepted the use of cookies on the
                                        Website.</p>
                                </li>
                                <li>
                                    <p><strong>Functionality Cookies</strong></p>
                                    <p>Type: Persistent Cookies</p>
                                    <p>Administered by: Us</p>
                                    <p>Purpose: These Cookies allow us to remember choices You make when You use the
                                        Website, such as
                                        remembering your login details or language preference. The purpose of these
                                        Cookies is to provide You
                                        with a more personal experience and to avoid You having to re-enter your
                                        preferences every time You use
                                        the Website.</p>
                                </li>
                            </ul>
                            <p>For more information about the cookies we use and your choices regarding cookies, please
                                visit our Cookies Policy
                                or the Cookies section of our Privacy Policy.</p>
                            <h3>Use of Your Personal Data</h3>
                            <p>The Company may use Personal Data for the following purposes:</p>
                            <ul>
                                <li>
                                    <p><strong>To provide and maintain our Service</strong>, including to monitor the
                                        usage of our Service.</p>
                                </li>
                                <li>
                                    <p><strong>To manage Your Account:</strong> to manage Your registration as a user of
                                        the Service. The
                                        Personal Data You provide can give You access to different functionalities of
                                        the Service that are
                                        available to You as a registered user.</p>
                                </li>
                                <li>
                                    <p><strong>For the performance of a contract:</strong> the development, compliance
                                        and undertaking of the
                                        purchase contract for the products, items or services You have purchased or of
                                        any other contract with
                                        Us through the Service.</p>
                                </li>
                                <li>
                                    <p><strong>To contact You:</strong> To contact You by email, telephone calls, SMS,
                                        or other equivalent forms
                                        of electronic communication, such as a mobile application's push notifications
                                        regarding updates or
                                        informative communications related to the functionalities, products or
                                        contracted services, including
                                        the security updates, when necessary or reasonable for their implementation.</p>
                                </li>
                                <li>
                                    <p><strong>To provide You</strong> with news, special offers and general information
                                        about other goods,
                                        services and events which we offer that are similar to those that you have
                                        already purchased or enquired
                                        about unless You have opted not to receive such information.</p>
                                </li>
                                <li>
                                    <p><strong>To manage Your requests:</strong> To attend and manage Your requests to
                                        Us.</p>
                                </li>
                                <li>
                                    <p><strong>For business transfers:</strong> We may use Your information to evaluate
                                        or conduct a merger,
                                        divestiture, restructuring, reorganization, dissolution, or other sale or
                                        transfer of some or all of Our
                                        assets, whether as a going concern or as part of bankruptcy, liquidation, or
                                        similar proceeding, in
                                        which Personal Data held by Us about our Service users is among the assets
                                        transferred.</p>
                                </li>
                                <li>
                                    <p><strong>For other purposes</strong>: We may use Your information for other
                                        purposes, such as data
                                        analysis, identifying usage trends, determining the effectiveness of our
                                        promotional campaigns and to
                                        evaluate and improve our Service, products, services, marketing and your
                                        experience.</p>
                                </li>
                            </ul>
                            <p>We may share Your personal information in the following situations:</p>
                            <ul>
                                <li><strong>With Service Providers:</strong> We may share Your personal information with
                                    Service Providers to
                                    monitor and analyze the use of our Service, to contact You.</li>
                                <li><strong>For business transfers:</strong> We may share or transfer Your personal
                                    information in connection
                                    with, or during negotiations of, any merger, sale of Company assets, financing, or
                                    acquisition of all or a
                                    portion of Our business to another company.</li>
                                <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates,
                                    in which case we will
                                    require those affiliates to honor this Privacy Policy. Affiliates include Our parent
                                    company and any other
                                    subsidiaries, joint venture partners or other companies that We control or that are
                                    under common control
                                    with Us.</li>
                                <li><strong>With business partners:</strong> We may share Your information with Our
                                    business partners to offer
                                    You certain products, services or promotions.</li>
                                <li><strong>With other users:</strong> when You share personal information or otherwise
                                    interact in the public
                                    areas with other users, such information may be viewed by all users and may be
                                    publicly distributed outside.
                                </li>
                                <li><strong>With Your consent</strong>: We may disclose Your personal information for
                                    any other purpose with
                                    Your consent.</li>
                            </ul>
                            <h3>Retention of Your Personal Data</h3>
                            <p>The Company will retain Your Personal Data only for as long as is necessary for the
                                purposes set out in this
                                Privacy Policy. We will retain and use Your Personal Data to the extent necessary to
                                comply with our legal
                                obligations (for example, if we are required to retain your data to comply with
                                applicable laws), resolve
                                disputes, and enforce our legal agreements and policies.</p>
                            <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is
                                generally retained for a
                                shorter period of time, except when this data is used to strengthen the security or to
                                improve the functionality
                                of Our Service, or We are legally obligated to retain this data for longer time periods.
                            </p>
                            <h3>Transfer of Your Personal Data</h3>
                            <p>Your information, including Personal Data, is processed at the Company's operating
                                offices and in any other
                                places where the parties involved in the processing are located. It means that this
                                information may be
                                transferred to — and maintained on — computers located outside of Your state, province,
                                country or other
                                governmental jurisdiction where the data protection laws may differ than those from Your
                                jurisdiction.</p>
                            <p>Your consent to this Privacy Policy followed by Your submission of such information
                                represents Your agreement to
                                that transfer.</p>
                            <p>The Company will take all steps reasonably necessary to ensure that Your data is treated
                                securely and in
                                accordance with this Privacy Policy and no transfer of Your Personal Data will take
                                place to an organization or
                                a country unless there are adequate controls in place including the security of Your
                                data and other personal
                                information.</p>
                            <h3>Delete Your Personal Data</h3>
                            <p>You have the right to delete or request that We assist in deleting the Personal Data that
                                We have collected about
                                You.</p>
                            <p>Our Service may give You the ability to delete certain information about You from within
                                the Service.</p>
                            <p>You may update, amend, or delete Your information at any time by signing in to Your
                                Account, if you have one, and
                                visiting the account settings section that allows you to manage Your personal
                                information. You may also contact
                                Us to request access to, correct, or delete any personal information that You have
                                provided to Us.</p>
                            <p>Please note, however, that We may need to retain certain information when we have a legal
                                obligation or lawful
                                basis to do so.</p>
                            <h3>Disclosure of Your Personal Data</h3>
                            <h4>Business Transactions</h4>
                            <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may
                                be transferred. We will
                                provide notice before Your Personal Data is transferred and becomes subject to a
                                different Privacy Policy.</p>
                            <h4>Law enforcement</h4>
                            <p>Under certain circumstances, the Company may be required to disclose Your Personal Data
                                if required to do so by
                                law or in response to valid requests by public authorities (e.g. a court or a government
                                agency).</p>
                            <h4>Other legal requirements</h4>
                            <p>The Company may disclose Your Personal Data in the good faith belief that such action is
                                necessary to:</p>
                            <ul>
                                <li>Comply with a legal obligation</li>
                                <li>Protect and defend the rights or property of the Company</li>
                                <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
                                <li>Protect the personal safety of Users of the Service or the public</li>
                                <li>Protect against legal liability</li>
                            </ul>
                            <h3>Security of Your Personal Data</h3>
                            <p>The security of Your Personal Data is important to Us, but remember that no method of
                                transmission over the
                                Internet, or method of electronic storage is 100% secure. While We strive to use
                                commercially acceptable means
                                to protect Your Personal Data, We cannot guarantee its absolute security.</p>
                            <h2>Children's Privacy</h2>
                            <p>Our Service does not address anyone under the age of 13. We do not knowingly collect
                                personally identifiable
                                information from anyone under the age of 13. If You are a parent or guardian and You are
                                aware that Your child
                                has provided Us with Personal Data, please contact Us. If We become aware that We have
                                collected Personal Data
                                from anyone under the age of 13 without verification of parental consent, We take steps
                                to remove that
                                information from Our servers.</p>
                            <p>If We need to rely on consent as a legal basis for processing Your information and Your
                                country requires consent
                                from a parent, We may require Your parent's consent before We collect and use that
                                information.</p>
                            <h2>Links to Other Websites</h2>
                            <p>Our Service may contain links to other websites that are not operated by Us. If You click
                                on a third party link,
                                You will be directed to that third party's site. We strongly advise You to review the
                                Privacy Policy of every
                                site You visit.</p>
                            <p>We have no control over and assume no responsibility for the content, privacy policies or
                                practices of any third
                                party sites or services.</p>
                            <h2>Changes to this Privacy Policy</h2>
                            <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by
                                posting the new Privacy
                                Policy on this page.</p>
                            <p>We will let You know via email and/or a prominent notice on Our Service, prior to the
                                change becoming effective
                                and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
                            <p>You are advised to review this Privacy Policy periodically for any changes. Changes to
                                this Privacy Policy are
                                effective when they are posted on this page.</p>
                            <h2>Contact Us</h2>
                            <p>If you have any questions about this Privacy Policy, You can contact us:</p>
                            <ul>
                                <li>By email: khyatidigiad@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End .row-->
                </div>
                <!-- End .container-->
        </section>


        <!--
      Footer
      =============================================
      -->
        <footer class="footer" id="footer">
            <div class="skew-divider-top"></div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-logo"><a class="logo" href="index.html"><img
                                        class="logo logo-light" src="assets/images/svg/logo.png" alt="Khyati Digi Ad"
                                        style="width: 50px;" /> <span
                                        style="color:#fff; font-weight:800; font-size: 25px;">Khyati Digi
                                        Ad</span> </a></div>
                            <p>Ladidapp is a design studio founded in London and expanded our services, and offering
                                solutions Worldwide.</p>
                            <div class="footer-social">
                                <ul class="list-unstyled">
                                    <li> <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">our policy</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#privacy-policy">Privacy policy</a></li>
                                    <li> <a href="privacy-policy">Terms & Condition</a></li>
                                    <li> <a href="privacy-policy">Child Safety Policy</a></li>
                                    <li> <a href="privacy-policy">Software policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <hr />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 text--center">
                            <div class="footer-copyright"><span>2021 &copy; <a>Khyati Digi Ad</a>.
                                    All rights reserved.</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container  -->
        </footer>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="web/assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="web/assets/js/vendor.min.js"></script>
    <script src="web/assets/js/functions.js"></script>
</body>

</html>
