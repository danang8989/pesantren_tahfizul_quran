@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Sejarah'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 mb-5">
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Profil Sekolah</h2>
                    <p data-aos="fade-up" data-aos-delay="100">{!! $about->description !!}</p>
            
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-1"></div>
                    <a href="{{ $about->video_url }}" data-fancybox class="video-wrap">
                        <span class="play-wrap"><span class="icon-play"></span></span>
                        <img src="{{ asset('img_assets/about/'.$about->image) }}" alt="Image" class="img-fluid rounded">
                    </a>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection