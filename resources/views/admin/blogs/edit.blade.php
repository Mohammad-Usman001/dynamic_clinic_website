@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <h1>Edit Blog</h1>
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <br>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $blog->title }}" required>
                        </div>
                        <div class="form-group"><br>
                            <label for="slug">Blog slug</label>
                            <input type="text" name="slug" id="slug" class="form-control"  value="{{ $blog->title }}" readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <input type="text" name="meta_description" id="meta_description" class="form-control"
                                value="{{ $blog->meta_description }}" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100">
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $blog->content }}</textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        // Slug Generation (optional)
        const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

            titleInput.addEventListener('input', function () {
                let slug = this.value.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/[\s-]+/g, '-');
                slugInput.value = slug;
            });
    </script>
      <script src="{{url('')}}/tinymce/tinymce.min.js"></script>

      <script>
          tinymce.init({
             selector: '#content',
             promotion: false,
                 setup: function(editor) {
                     editor.on('change', function() {
                         tinymce.triggerSave();
                     });
                 },
                 height: 300,
                 plugins: 'advlist image autolink link lists charmap preview anchor pagebreak searchreplace wordcount visualblocks code fullscreen insertdatetime table emoticons template directionality help',
                 toolbar: 'ltr rtl  | blocks  fontselect fontsizeselect fontfamily | undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                     'bullist numlist outdent indent | image | link image | print preview media fullscreen | ' +
                     'forecolor backcolor emoticons | removeformat | help',
                 automatic_uploads: true,
                 file_picker_types: 'image',
                 images_reuse_filename: true,
                 file_picker_callback: function(callback, value, meta) {
                     laravelFilemanager({
                         type: 'image',
                         callback: callback
                     });
                 },
                 menu: {
                     favs: {
                         title: 'My Favorites',
                         items: 'code visualaid | searchreplace'
                     }
                 },
                 menubar: 'favs file edit view insert format tools table help',
                 content_style: 'body { font-family: Helvetica, Arial, sans-serif; font-size: 16px }',
                 font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
             });
         </script>
@endsection
