@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Berkas</h5>
                <div class="mb-3">
                    <label for="image" class="form-label">Fotokopi Rapot</label>
                    <div>
                        <a href="{{ asset('img_assets/student_file/'. $student_file->fc_report) }}">Download</a>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Fotokopi KK</label>
                    <div>
                        <a href="{{ asset('img_assets/student_file/'. $student_file->fc_kk) }}">Download</a>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Fotokopi Akte</label>
                    <div>
                        <a href="{{ asset('img_assets/student_file/'. $student_file->fc_akte) }}">Download</a>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Fotokopi SKHU</label>
                    <div>
                        <a href="{{ asset('img_assets/student_file/'. $student_file->fc_skhu) }}">Download</a>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Photo 3x4</label>
                    <div>
                        <a href="{{ asset('img_assets/student_file/'. $student_file->fc_photo) }}">Download</a>
                    </div>
                </div>

                <form action="{{ route('admin.student_file.update') }}" method="POST">
                    @csrf @method('PUT')
                    <input type="hidden" name="id" value="{{ $student_file->id }}">

                    <div class="mb-3">
                        <label for="name" class="form-label">Status</label>
                        <select name="is_approved" class="form-control form-control-sm">
                            <option value="">-Pilih untuk menerima-</option>
                            <option value="1" @if ($student_file->is_approved == 1)
                                selected
                            @endif>Diterima</option>
                            <option value="2" @if ($student_file->is_approved == 0)
                                selected
                            @endif>Ditolak</option>
                        </select>

                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection