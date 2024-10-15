<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
  <style>
     .owl-carousel .owl-stage {
      display: flex;
    }

   .owl-carousel .owl-item {
      width: auto;
      height: 100vh !important;
    }
  </style>

  <title>Pesantren Tahfizul Quran Darul Qolam.</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav mb-5">
    @include('components.web.top_header')
    @if (Request::is('user/*') != null)
      @include('components.web.navbar_user')    
    @else
      @include('components.web.navbar')    
    @endif
  </nav>
  

    @yield('content')

    @include('components.web.footer')

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="{{ asset('web/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('web/js/aos.js') }}"></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>
    @yield('footer-scripts')

  </body>

  </html>
