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
</head>
<body class="body-scroll">
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
        <!--
      Header
      =============================================
      -->
        <header class="header header-light header-sticky">
            <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
                <div class="container"> <a class="logo navbar-brand" href="{{ route('web.home') }}"><img
                            class="logo logo-dark" src="assets/images/svg/logo.png" alt="LadidApp Logo"
                            style="width: 50px;" /><img class="logo logo-light" src="assets/images/svg/logo.png"
                            alt="Khyati Digi Ad" style="width: 50px;" /> <span
                            style="font-weight:800; font-size: 25px;">Khyati Digi
                            Ad</span></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarContent" aria-expanded="false"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('web.home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo"
                                    href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo"
                                    href="#screens">screenshots</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('privacy') }}">Privacy policy</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('terms') }}">Terms & Condition</a>
                            </li>
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
        <!-- End Header  -->
        @yield('content')
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
                            <div class="footer-logo"><a class="logo" href="index.html"><img class="logo logo-light"
                                        src="assets/images/svg/logo.png" alt="Khyati Digi Ad" style="width: 50px;" />
                                    <span style="color:#fff; font-weight:800; font-size: 25px;">Khyati Digi
                                        Ad</span> </a></div>
                            <p>At Khyati Digi Ad, we create impactful websites, mobile apps, and daily event posters
                                that drive results. Our services include content writing, social media posts, and
                                Instagram/Facebook promotions. </p>
                            <div class="footer-social">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">our policy</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="{{ route('privacy') }}">Privacy policy</a></li>
                                    <li> <a href="{{ route('terms') }}">Terms & Condition</a></li>
                                    <li> <a href="{{ route('childprivacy') }}">Child Safety Policy</a></li>
                                    <li> <a href="{{ route('software-policy') }}">Software policy</a></li>
                                    <li> <a href="{{ route('refund-policy') }}">Refund & Cancellation Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="footer-widget">
                                <h6 class="widget-title">Contact Us</h6>
                                <ul class="list-unstyled contact-info">
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-geo-alt-fill me-2 mt-1 text-primary"></i>
                                        <div>
                                            <strong>Address:</strong>
                                            <p class="mb-0">Malvi Chowk<br>Jabalpur, Madhya Pradesh<br>482002,
                                                India</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-envelope-fill me-2 mt-1 text-primary"></i>
                                        <div>
                                            <strong>Email:</strong>
                                            <p class="mb-0">
                                                <a href="mailto:contact@khyatidigital.com"
                                                    class="text-decoration-none">contact@khyatidigital.com</a><br>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <i class="bi bi-telephone-fill me-2 mt-1 text-primary"></i>
                                        <div>
                                            <strong>Phone:</strong>
                                            <p class="mb-0">
                                                <a href="tel:+919479590611" class="text-decoration-none">+91 94795 90611</a>
                                            </p>
                                        </div>
                                    </li>
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
                            <div class="footer-copyright"><span>2025 &copy; <a>Khyati Digi Ad</a>.
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
