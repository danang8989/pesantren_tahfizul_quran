@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Daftar'])

    <div class="untree_co-section">
        <div class="container">
    
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
              <form action="{{ route('register') }}" class="form-box" method="POST">
                @csrf @method('POST')
                <div class="row">

                  <div class="col-12 mb-3">
                    <label for="email" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" aria-describedby="emailHelp">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="phone_number" class="form-label">No Telefon</label>
                    <input type="text" name="phone_number" class="form-control" id="phone_number" aria-describedby="emailHelp">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3 col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>

                  <div class="col-12">
                    <p class="mb-3">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                  </div>
    
                  <div class="col-12">
                    <input type="submit" value="Daftar" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
          </div>
    
          
        </div>
      </div> <!-- /.untree_co-section -->

@endsection