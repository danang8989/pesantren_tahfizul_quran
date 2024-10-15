@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-9 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Galeri</h5>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('admin.gallery.create') }}">
                            <button type="button" class="btn btn-secondary m-1">Tambah</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th width="20%" class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Gambar</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Aksi</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>      
                            @foreach ($gallery as $item)
                                <tr>
                                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $item->id }}</h6></td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">Download</p>
                                    </td>
                                    <td class="border-bottom-0 d-flex">
                                        <a href="{{ route('admin.gallery.edit', $item->id) }}">
                                            <button type="button" class="btn btn-warning btn-sm m-1">Edit</button>
                                        </a>
                                        <form action="{{ route('admin.gallery.delete') }}" method="POST">
                                            @csrf @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-sm btn-danger m-1">Hapus</button>
                                        </form>
                                    </td>
                                </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection