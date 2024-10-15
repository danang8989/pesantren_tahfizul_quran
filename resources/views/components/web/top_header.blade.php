<div class="pb-2 top-bar mb-3">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-9">
          <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">{{ $contact->phone_number }}</span></a> 
          <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">{{ $contact->email }}</span></a> 
        </div>

        <div class="col-6 col-lg-3 text-right">
          @if (auth()->user() != null)
          <a href="{{ route('register') }}" class="small" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
            <span class="icon-person"></span>
            Keluar
            <form id="logout-form" action="{{ route('logout') }}"
              method="POST" style="display: none">
              @csrf
            </form>
          </a>
          @else
          <a href="{{ route('login') }}" class="small mr-3">
            <span class="icon-lock"></span>
            Masuk
          </a>
          <a href="{{ route('register') }}" class="small">
            <span class="icon-person"></span>
            Daftar
          </a>
          @endif
        </div>

      </div>
    </div>
  </div>