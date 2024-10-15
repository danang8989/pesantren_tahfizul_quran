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
                            @if ($announcement != null)
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ str_replace(' ', '', $item->name) }}" aria-expanded="true" aria-controls="{{ str_replace(' ', '', $item->name) }}">
                                        Kamu berada di {{ $announcement->name }}
                                    </button>
                                </h2>
                                <div id="{{ str_replace(' ', '', $announcement->name) }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div>
                                                <p>{!! $announcement->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            @else
                                <i>Data kamu sedang diproses admin, tunggu hingga keluar jadwal gelombang ujian kamu.</i>
                            @endif
                        </div> <!-- .accordion-item -->
            
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection