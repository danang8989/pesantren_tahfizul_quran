@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Masuk'])

    <div class="untree_co-section">
        <div class="container">
    
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
              <form action="#" class="form-box">
                <div class="row">
                  <div class="col-12 mb-3">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-12 mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                  </div>

                  <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
    
                  <div class="col-12">
                    <input type="submit" value="Masuk" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
          </div>
    
          
        </div>
      </div> <!-- /.untree_co-section -->

@endsection