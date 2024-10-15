@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Galeri</h5>
                <form action="{{ route('admin.gallery.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <input type="hidden" name="id" value="{{ $gallery->id }}">
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" name="image" class="form-control form-control-sm" id="height">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
<script>
  $(document).ready(function() {
      $('#content').summernote({
        toolbar: [
          // [groupName, [list of button]]
          ['style', ['fontname','fontsize', 'color', 'forecolor','bold', 'italic', 'underline', 'clear', 'height']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['insert', ['link', 'table', 'hr' ]],
          ['view', ['fullscreen', 'codeview']],
        ],
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
              }
          }
      });
  });
</script>
@endsection