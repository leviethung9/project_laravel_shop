@extends('admin.layouts.main')
@section('content')
<h3> Cập nhật danh mục </h3>
<form role="form" action="{{route('size.update',$size->id)}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
      <label for="">Tên size <span class="text-danger">(*)</span></label>
      <input type="text" name="size_name" class="form-control" value="{{ $size->size_name }}">
    @if ($errors->first('size_name'))
        <span class="text-danger">
            {{ $errors->first('size_name') }}
        </span>
    @endif
      
    
    </div>
    <a href="{{route('size.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  
  </form>
@endsection