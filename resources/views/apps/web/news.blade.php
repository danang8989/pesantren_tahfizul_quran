@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Berita'])

    <div class="untree_co-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Artikel Terkini</h2>
                <p>Lihat artikel terkini</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                @foreach ($news as $item)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-h d-flex h-100">
                            <figure>
                                <img src="{{ asset('img_assets/news/'. $item->image) }}" alt="Image">
                            </figure>
                            <div class="media-h-body">
                                <h2 class="mb-3"><a href="{{ route('detail_article', $item->id) }}">{{ $item->title }}</a></h2>
                                <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>{{ date('d, m Y', strtotime($item->created_at)) }}</span>  <span class="icon-person mr-2"></span>Admin</div>
                                <p><a href="{{ route('detail_article', $item->id) }}">Lihat Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> <!-- /.untree_co-section -->

@endsection