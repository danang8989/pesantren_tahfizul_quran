@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Artikel</h5>
                <form action="{{ route('admin.news.update') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $news->id }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Judul</label>
                        <input type="text" value="{{ $news->title }}" name="title" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Kategory Artikel</label>
                        <select class="form-control form-control-sm" name="news_category_id">
                            <option value="">-Silahkan Pilih-</option>
                            @foreach ($news_category as $item)
                                <option value="{{ $item->id }}"
                                    @if ($item->id == $news->news_category_id)
                                        selected
                                    @endif>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Deskripsi</label>
                        <textarea id="content" class="col-sm-10" type="text" name="description" class="form-control" required>
                            {{ $news->description }}
                        </textarea>
                    </div>
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
      
      function sendFile(file, editor, welEditable) {
          data = new FormData();
          data.append("file", file);
          data.append("name", 'Danang');
          $.ajax({
            data: data,
            type: "POST",
            url: `https://www.chstudiomedan.id/api/save_image_news`,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response.file_name)
                var image = $('<img>').attr('src', `https://www.chstudiomedan.id/img_assets/news_content_image/${response.file_name}`);
                $('#content').summernote("insertNode", image[0]);
            }
          });
       }
      
  });
</script>
@endsection