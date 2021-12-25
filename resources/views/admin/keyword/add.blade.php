@extends('admin.layouts.main')
@section('content')
<h3> Thêm mới từ khóa </h3>
<form role="form" action="{{route('keyword.store')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="">Tên từ khóa <span class="text-danger">(*)</span></label>
      <input type="text" name="k_name" class="form-control" >
      <br>
      @if ($errors->first('k_name'))
      <span class="text-danger">
          {{ $errors->first('k_name') }}
      </span>
  @endif
    </div>
 
    <a href="{{route('category.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
@endsection