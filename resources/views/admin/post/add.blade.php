@extends('admin.layouts.main')
@section('content')
<h3> Thêm mới bài viết </h3>
<form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="">Tiêu đề bài viết<span class="text-danger">(*)</span></label>
      <input type="text" name="p_title" class="form-control" >
    @if ($errors->first('p_title'))
        <span class="text-danger">
            {{ $errors->first('p_title') }}
        </span>
    @endif
    </div>
    <div class="form-group">
      <label for="">Thuộc chuyên mục<span class="text-danger">(*)</span></label>
      <select name="p_cate" id="" class="form-control">
        <option value="">-- Click chọn chuyên mục --</option>
        @foreach ($catepost as $item)
        <option value="{{ $item->cate_post_title }}">{{ $item->cate_post_title }}</option>
        @endforeach
      </select>
    @if ($errors->first('p_cate'))
        <span class="text-danger">
            {{ $errors->first('p_cate') }}
        </span>
    @endif
    </div>
    <div class="form-group">
      <label for="">Hình ảnh đại diện<span class="text-danger">(*)</span></label>
      <input type="file" name="p_avatar" class="form-control" >
    @if ($errors->first('p_avatar'))
        <span class="text-danger">
            {{ $errors->first('p_avatar') }}
        </span>
    @endif
    </div>
    <div class="form-group">
      <label for="">Chi tiết <span class="text-danger">(*)</span></label>
      <textarea name="p_content" id="p_content" cols="20" rows="6" class="form-control"></textarea>
    @if ($errors->first('p_content'))
        <span class="text-danger">
            {{ $errors->first('p_content') }}
        </span>
    @endif
    </div>
    <a href="{{route('post.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
  <script type="text/javascript" src="{{ asset('template/admin/ckeditor/ckeditor.js') }}">
    
  </script>
    <script>
      CKEDITOR.replace( 'p_content' );
  </script>
@endsection