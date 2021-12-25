@extends('admin.layouts.main')
@section('content')
<h3> Cập nhật danh mục </h3>
<form role="form" action="{{route('category.edit',$categories->id)}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group" {{ $errors->first('name') ? 'has-errors' : ''}}>
      <label for="">Tên danh mục <span class="text-danger">(*)</span></label>
      <input type="text" name="c_name" class="form-control" value="{{ $categories->c_name }}">
    @if ($errors->first('c_name'))
        <span class="text-danger">
            {{ $errors->first('c_name') }}
        </span>
    @endif
      
    
    </div>
    <a href="{{route('category.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  
  </form>
@endsection