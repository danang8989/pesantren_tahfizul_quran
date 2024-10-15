<div class="sticky-nav js-sticky-header">
    <div class="container position-relative">
      <div class="site-navigation text-right">
        <img class="logo menu-absolute m-0" src="{{ asset('image_assets/long_logo.png') }}" width="240px" style="margin-top: -10px !important" />

        <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
          <li class="active"><a href="{{ route('/') }}">Home</a></li>
          <li class="active"><a href="{{ route('user.data') }}">Lengkapi Data</a></li>
          <li class="active"><a href="{{ route('user.testing_schedule') }}">Jadwal Seleksi</a></li>
          <li class="active"><a href="{{ route('user.result') }}">Hasil</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </div>