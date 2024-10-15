@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Hubungi Kami'])

    <div class="untree_co-section">
        <div class="container">
    
          <div class="row mb-5">
            <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="contact-info">
    
                <div class="address mt-4">
                  <i class="icon-room"></i>
                  <h4 class="mb-2">Lokasi Sekolah:</h4>
                  <p>{{ $contact->address }}</p>
                </div>
    
                <div class="email mt-4">
                  <i class="icon-envelope"></i>
                  <h4 class="mb-2">Email:</h4>
                  <p>{{ $contact->email }}</p>
                </div>
    
                <div class="phone mt-4">
                  <i class="icon-phone"></i>
                  <h4 class="mb-2">Telepon:</h4>
                  <p>{{ $contact->phone_number }}</p>
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.untree_co-section -->
    

@endsection