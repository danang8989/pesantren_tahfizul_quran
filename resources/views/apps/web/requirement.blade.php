@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Syarat Pendaftaran'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 mb-5">
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Syarat Pendaftaran</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" style="border-top: 2px solid #007b3c; padding-top: 20px;">
                    <div style="width: 20px; height: 20px; border-radius: 20px; background-color: #007b3c; margin-top: -30px; margin-right: auto; margin-left: -20px"></div>
                    <div style="width: 20px; height: 20px; border-radius: 20px; background-color: #007b3c; margin-top: -20px; margin-left: auto; margin-right: -20px"></div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/images/form-icon.png') }}" style="width: 20%"/>
                        <div style="margin-left: 20px">
                            <h4>Jadwal Ujian</h4>
                            <p>
                                Pilih jurusan dan isi form pendaftaran PPDB Online
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="border-top: 2px solid #007b3c; padding-top: 20px;">
                    <div style="width: 20px; height: 20px; border-radius: 20px; background-color: #007b3c; margin-top: -30px; margin-left: auto; margin-right: -20px"></div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/images/check-icon.png') }}" style="width: 20%"/>
                        <div style="margin-left: 20px">
                            <h4>Lengkapi Data</h4>
                            <p>
                                Lengkapi form pengisian data lanjutan dengan lebih detail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="border-top: 2px solid #007b3c; padding-top: 20px;">
                    <div style="width: 20px; height: 20px; border-radius: 20px; background-color: #007b3c; margin-top: -30px; margin-left: auto; margin-right: -20px"></div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('web/images/calendar-icon.png') }}" style="width: 20%"/>
                        <div style="margin-left: 20px">
                            <h4>Tes Akademik</h4>
                            <p>
                                Tunggu informasi jadwal tes akademik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-4">
                    <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Daftar Sekarang</a></p>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection