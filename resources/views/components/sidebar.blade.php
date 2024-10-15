<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between" style="margin-bottom: 20px">
      <img src="{{ asset('image_assets/logo.png') }}" style="width: 20%"/>
      <p style="font-weight: bold; padding-left: 10px; padding-top: 10px">Pesantren Tahfizul Quran Darul Qolam</p>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="bx bx-image-alt"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Master</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.carousel') }}" aria-expanded="false">
            <span>
              <i class="bx bx-image-alt" style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Carousel</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.about') }}" aria-expanded="false">
            <span>
              <i class='bx bx-sitemap' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Sejarah</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.vission_mission') }}" aria-expanded="false">
            <span>
              <i class='bx bx-sitemap' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Visi Misi</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.organization_structure') }}" aria-expanded="false">
            <span>
              <i class='bx bx-sitemap' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Struktur Organisasi</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.department') }}" aria-expanded="false">
            <span>
              <i class='bx bx-sitemap' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Jurusan</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.contact') }}" aria-expanded="false">
            <span>
              <i class='bx bx-phone-call' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Kontak</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.news_category') }}" aria-expanded="false">
            <span>
              <i class='bx bx-news' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Kategori Artikel</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.news') }}" aria-expanded="false">
            <span>
              <i class='bx bx-news' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Artikel</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.gallery') }}" aria-expanded="false">
            <span>
              <i class='bx bx-news' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Galeri</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Portal</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.student') }}" aria-expanded="false">
            <span>
              <i class='bx bx-user-circle' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Pendaftar</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.student_parent') }}" aria-expanded="false">
            <span>
              <i class='bx bx-user-pin'  style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Orang Tua</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.student_file') }}" aria-expanded="false">
            <span>
              <i class='bx bx-file' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Berkas</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('admin.romtest') }}" aria-expanded="false">
            <span>
              <i class='bx bx-doughnut-chart' style="font-size: 24px"></i>
            </span>
            <span class="hide-menu">Rombongan Test</span>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>