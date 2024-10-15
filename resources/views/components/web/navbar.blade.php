<div class="sticky-nav js-sticky-header">
    <div class="container position-relative">
      <div class="site-navigation text-right">
        <img class="logo menu-absolute m-0" src="{{ asset('image_assets/long_logo.png') }}" width="240px" style="margin-top: -10px !important" />

        <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
          <li class="active"><a href="{{ route('/') }}">Home</a></li>
          <li class="has-children">
            <a href="#">Profil</a>
            <ul class="dropdown">
              <li><a href="{{ route('about') }}">Sejarah</a></li>
              <li><a href="{{ route('vission_mission') }}">Visi Misi</a></li>
              <li><a href="{{ route('organization_structure') }}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="has-children">
            <a href="#">Kegiatan</a>
            <ul class="dropdown">
                <li><a href="{{ route('achivement') }}">Prestasi</a></li>
              <li><a href="{{ route('ekstrakurikuler') }}">Ekstrakulikuler</a></li>
              <li><a href="{{ route('news') }}">Berita</a></li>
            </ul>
          </li>
          <li class="has-children">
            <a href="#">PPBD</a>
            <ul class="dropdown">
                <li><a href="{{ route('requirement') }}">Syarat</a></li>
              <li><a href="{{ route('announcement') }}">Pengumuman</a></li>
            </ul>
          </li>
          <li><a href="{{ route('gallery') }}">Galeri</a></li>
          <li><a href="{{ route('contact') }}">Hubungi Kami</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </div>