@extends('admin.layouts.main')
@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <a href="{{ route('post.index') }}" class="btn btn-primary">Trờ về</a>
    <br>
    <div>
        <label for=""> id: </label>
        <input type="text" value="{{ $post->id }}" class="form-control">
        <br>
        <label for=""> Tiêu đề bài viết: </label>
        <div>
            <input type="text" value="{{ $post->p_title }}" class="form-control">
        </div>
        <br>
        <label for=""> Hình ảnh: </label>
        <div>
            <img src="/uploads2/{{ $post->p_avatar }}" class="img-fluid w-50 img-thumbnail" alt="" style="width: 50%;">
        </div>
        <br>
        <label for=""> Nội dung:</label>
        <div>
            <textarea name="p_content" id="p_content" cols="20" rows="6" class="form-control">
                {{ $post->p_content }}
            </textarea>
        </div>
        <br>
        <div>
            
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('template/admin/ckeditor/ckeditor.js') }}">
    </script>
    <script>
        CKEDITOR.replace('p_content');
    </script>
@endsection
