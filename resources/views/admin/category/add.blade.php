@extends('admin.layouts.main')
@section('content')
<h3> Thêm mới danh mục </h3>
<form role="form" action="{{route('category.store')}}" method="post">
  @csrf
  <div class="form-group">
      <label for="">Tên danh mục <span class="text-danger">(*)</span></label>
      <input type="text" name="c_name" class="form-control" >

    @if ($errors->first('c_name'))
        <span class="text-danger">
            {{ $errors->first('c_name') }}
        </span>
    @endif
    
    </div>
    <a href="{{route('category.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
@endsection