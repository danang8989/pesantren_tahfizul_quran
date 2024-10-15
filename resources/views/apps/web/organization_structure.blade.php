@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Struktur Organisasi'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 mb-5">
                    <p data-aos="fade-up" data-aos-delay="100">{!! $organization_structure->description !!}</p>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection