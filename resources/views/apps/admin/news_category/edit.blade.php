@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Berita</h5>
                <form action="{{ route('admin.news_category.update') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $news->id }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" value="{{ $news->name }}" name="name" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection