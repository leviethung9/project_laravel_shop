@extends('admin.layouts.main')
@section('content')
<h3> Thêm mới từ khóa </h3>
<form role="form" action="{{route('size.store')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="">Tên size <span class="text-danger">(*)</span></label>
      <input type="text" name="size_name" class="form-control" >
      <br>
      @if ($errors->first('size_name'))
      <span class="text-danger">
          {{ $errors->first('size_name') }}
      </span>
  @endif
    </div>
 
    <a href="{{route('category.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
@endsection