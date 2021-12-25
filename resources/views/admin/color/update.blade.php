@extends('admin.layouts.main')
@section('content')
<h3> Cập nhật màu sắc </h3>
<form role="form" action="{{route('color.update',$color->id)}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
      <label for="">Tên size <span class="text-danger">(*)</span></label>
      <input type="text" name="color_name" class="form-control" value="{{ $color->color_name }}">
    @if ($errors->first('color_name'))
        <span class="text-danger">
            {{ $errors->first('color_name') }}
        </span>
    @endif
      
    
    </div>
    <a href="{{route('color.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  
  </form>
@endsection