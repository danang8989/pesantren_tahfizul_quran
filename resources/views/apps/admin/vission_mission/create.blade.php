@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Visi Misi</h5>
                <form action="{{ route('admin.vission_mission.insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('POST')
                    <div class="mb-3">
                      <label for="name" class="form-label">Type</label>
                      <select name="type" class="form-control form-control-sm">
                        <option value="">-Silahkan Pilih-</option>
                        <option value="visi">Visi</option>
                        <option value="misi">Misi</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea type="text" name="description" class="form-control form-control-sm"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection