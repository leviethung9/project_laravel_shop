@extends('admin.layouts.main')
@section('content')
<h3> Thêm mới màu sắc </h3>
<form role="form" action="{{route('color.store')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="">Tên màu <span class="text-danger">(*)</span></label>
      <input type="text" name="color_name" class="form-control" >
      <br>
      @if ($errors->first('color_name'))
      <span class="text-danger">
          {{ $errors->first('color_name') }}
      </span>
  @endif
    </div>
    <a href="{{route('category.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
@endsection