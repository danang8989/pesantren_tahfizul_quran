@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Visi & Misi'])

    <div class="services-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                        <h2 class="line-bottom mb-4">Visi Kami</h2>
                    </div>

                    <p data-aos="fade-up" data-aos-delay="100">
                        {{ $vission->description }}
                    </p>

                </div>
                <div class="col-lg-6 mb-5 mb-lg-0"> 
                    <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
                        <h2 class="line-bottom mb-4">Misi Kami</h2>
                    </div>

                    <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($mission as $item)
                            <li>{{ $item->description }}</li>
                        @endforeach
                    </ul>

                    <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Bergabung dengan kami.</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection