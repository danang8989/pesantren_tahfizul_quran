@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Hasil Kelulusan'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 mb-5">
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Hasil Kelulusan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    @if ($student->is_approved == 1)
                        <h3>Selamat {{ $student->name }} kamu dinyatakan lulus.</h3>
                        <h5>Tunggu info selanjutnya dari admin lewat informasi website ini.</h5>
                        <img src="{{ asset('image_assets/great-01.png') }}" style="width: 60%"/>
                    @else
                        <h3>Mohon bersabar data mu sedang di proses</h3>
                    @endif
                </div>
                
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection