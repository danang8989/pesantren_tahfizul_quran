@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Detail Artikel'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <img src="{{ asset('img_assets/news/'.$news->image) }}" alt="Image" class="img-fluid rounded" style="width: 100%; object-fit: cover; height: 200px;">
                    <p></p>
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">{{ $news->newsCategory->name }}</h2>
                    <p data-aos="fade-up" data-aos-delay="100">{!! $news->description !!}</p>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection