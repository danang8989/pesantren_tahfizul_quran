<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yayasan</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('dashboard/css/styles.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dashboard/libs/summernote/summernote-lite.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dashboard/libs/boxicons/css/boxicons.min.css') }}" />

  <style>
    .swal2-container{
      z-index: 9999 !important;
    }
    .note-btn.dropdown-toggle:after {
      content: none;
    }
    .note-editor .note-editable {
        line-height: 1;
    }
    .note-modal{
      z-index: 999999;
    }
    .note-modal-footer{
      height: 60px;
      padding-bottom: 10px
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('components.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a class="btn btn-outline-primary mx-3 mt-2 d-block" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Log Out</span>
                    <form id="logout-form" action="{{ route('logout') }}"
                          method="POST" style="display: none">
                          @csrf
                    </form>
                  </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        @yield('content')
        <div><p class="mb-0 fs-4">Pesantren Tahfizul Quran Darul Qolam.</p></div>
      </div>
    </div>
  </div>
  <script src="{{ asset('dashboard/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('dashboard/js/app.min.js') }}"></script>
  <script src="{{ asset('dashboard/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('dashboard/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('dashboard/js/dashboard.js') }}"></script>
  <script src="{{ asset('dashboard/libs/summernote/summernote-lite.min.js') }}"></script>

  @yield('footer-scripts')
</body>

</html>