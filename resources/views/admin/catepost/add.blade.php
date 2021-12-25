@extends('admin.layouts.main')
@section('content')
<h3> Thêm mới chuyên mục </h3>
<form role="form" action="{{route('catepost.store')}}" method="post">
  @csrf
  <div class="form-group">
      <label for="">Tên chuyên mục <span class="text-danger">(*)</span></label>
      <input type="text" name="cate_post_title" class="form-control" >

    @if ($errors->first('cate_post_title'))
        <span class="text-danger">
            {{ $errors->first('cate_post_title') }}
        </span>
    @endif
    
    </div>
    <a href="{{route('catepost.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
@endsection