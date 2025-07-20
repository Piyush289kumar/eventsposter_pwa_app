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
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#pricing">pricing</a>
                            </li>
                        </ul>
                        <div class="module-container">
                            <!--module-btn-->
                            <div class="module module-cta"><a class="btn" href="{{ route('home') }}"
                                    data-scroll="scrollTo" href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share"> <span>Download</span></a></div>
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
                                <div class="hero-action"><a class="btn btn--primary" href="https://play.google.com/store/apps/details?id=com.khyati.eventposterapp&pcampaignid=web_share">
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
                        <div class="pricing-switcher"><a class="btn active" id="monthly" href="javascript:void(0)">monthly</a><a class="btn" id="yearly" href="javascript:void(0)">yearly</a></div>
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
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free trial</a>
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
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free trial</a>
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
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free trial</a>
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
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free trial</a>
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
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free trial</a>
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
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free trial</a>
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
                                    <li> <a href="javascript:void(0)">Privacy policy</a></li>
                                    <li> <a href="javascript:void(0)">Terms & Condition</a></li>
                                    <li> <a href="javascript:void(0)">Child Safety Policy</a></li>
                                    <li> <a href="javascript:void(0)">Software policy</a></li>
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
