@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Kontak</h5>
                <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">No. Telp</label>
                        <input type="text" value="{{ $contact->phone_number }}" name="phone_number" class="form-control form-control-sm" id="height">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" value="{{ $contact->email }}" name="email" class="form-control form-control-sm" id="height">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Alamat</label>
                        <textarea type="text" name="address" class="form-control form-control-sm">{{ $contact->address }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection