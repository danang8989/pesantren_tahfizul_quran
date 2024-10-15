@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Pengumuman'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('web/images/img-school-5-min.jpg') }}" alt="image" class="img-fluid">
                </div>
                <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="line-bottom mb-4">Pengumuman</h3>
                    <p>Lihat pengumuman terbaru disini.</p>
        
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            @foreach ($announcement as $item)
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ str_replace(' ', '', $item->name) }}" aria-expanded="true" aria-controls="{{ str_replace(' ', '', $item->name) }}">
                                        {{ $item->name }}
                                    </button>
                                </h2>
                                <div id="{{ str_replace(' ', '', $item->name) }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div>
                                                <p>{!! $item->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                        </div> <!-- .accordion-item -->
            
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection