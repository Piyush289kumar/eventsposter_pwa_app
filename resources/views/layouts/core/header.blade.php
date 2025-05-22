 <header id="top-navbar" class="site_lr-spacer homeHeader-main">
     <a href="{{route('home')}}">
         <img class="nav-header" src="assets/images/svg/logo.svg" alt="homeLogo" style="height: 30px;">
         <span class="text-dark mx-1" style="font-weight: 750;">{{ config('app.name', 'Laravel') }}</span>
     </a>
     <div class="homeHeader">
         {{-- <a href="notification.html">
             <img src="assets/images/svg/buttonNotification.svg" alt="buttonNotification">
         </a> --}}
         <a href="#offcanvasExample" aria-controls="offcanvasExample" data-bs-toggle="offcanvas">
             <img src="assets/images/svg/buttonSettings.svg" alt="buttonSettings">
         </a>
     </div>
 </header>
