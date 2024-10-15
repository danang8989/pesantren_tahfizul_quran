@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Galeri'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 item">
                    @foreach ($gallery as $item)
                        <a href="{{ asset('img_assets/gallery/'.$item->image) }}" class="item-wrap fancybox mb-4" data-fancybox="gal" data-aos="fade-up" data-aos-delay="0">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="{{ asset('img_assets/gallery/'.$item->image) }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->

@endsection