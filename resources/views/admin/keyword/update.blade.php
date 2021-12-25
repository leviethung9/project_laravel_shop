@extends('admin.layouts.main')
@section('content')
<h3> Cập nhật danh mục </h3>
<form role="form" action="{{route('keyword.update',$keyword->id)}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group" {{ $errors->first('k_name') ? 'has-errors' : ''}}>
      <label for="">Tên danh mục <span class="text-danger">(*)</span></label>
      <input type="text" name="k_name" class="form-control" value="{{ $keyword->k_name }}">
    @if ($errors->first('k_name'))
        <span class="text-danger">
            {{ $errors->first('k_name') }}
        </span>
    @endif
      
    
    </div>
    <a href="{{route('keyword.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  
  </form>
@endsection