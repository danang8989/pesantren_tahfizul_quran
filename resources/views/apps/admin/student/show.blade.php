@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Peserta</h5>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <p>{{ $student->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">NISN</label>
                    <p>{{ $student->nisn }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Anak Ke</label>
                    <p>{{ $student->kids_order }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Tanggal Lahir</label>
                    <p>{{ date('d/m/Y', strtotime($student->date_birth)) }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Alamat</label>
                    <p>{{ $student->address }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Kode Pos</label>
                    <p>{{ $student->postal_code }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Desa</label>
                    <p>{{ $student->village->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Kecamatan</label>
                    <p>{{ $student->subdistrict->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Kabupaten</label>
                    <p>{{ $student->regencies->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <a href="{{ asset('/img_assets/student/'. $student->photo) }}">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection