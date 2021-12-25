@extends('admin.layouts.main')
@section('content')
<h3> Cập nhật sản phẩm </h3>
<form role="form" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')
  <div class="row">
    <div class="col-6">
      <div class="form-group" {{ $errors->first('name') ? 'has-errors' : ''}}>
        <label for="">Tên sản phẩm <span class="text-danger">(*)</span></label>
        <input type="text" name="pro_name" class="form-control" value="{{ $product->pro_name }}">
      @if ($errors->first('pro_name'))
          <span class="text-danger">
              {{ $errors->first('pro_name') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Thuộc danh mục <span class="text-danger">(*)</span></label>
        <select name="pro_name_cate" id="" class="form-control">
          <option value="">-- Click danh mục --</option>
          @foreach ($categories as $item)
          <option value="{{ $item->c_name }}">{{ $item->c_name }}</option>
          @endforeach
        </select>
      @if ($errors->first('pro_name_cate'))
          <span class="text-danger">
              {{ $errors->first('pro_name_cate') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Giá <span class="text-danger">(*)</span></label>
        <input type="number" name="pro_price" value="{{$product->pro_price}}" data-type="currency" class="form-control" >
      @if ($errors->first('pro_price'))
          <span class="text-danger">
              {{ $errors->first('pro_price') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Giá khuyến mại <span class="text-danger">(*)</span></label>
        <input type="number" name="pro_price_sale" value="{{$product->pro_price_sale}}" data-type="currency" class="form-control" >
      @if ($errors->first('pro_price_sale'))
          <span class="text-danger">
              {{ $errors->first('pro_price_sale') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Hình ảnh <span class="text-danger">(*)</span></label>
        <input type="file" name="pro_avatar" class="form-control"  >
        
      @if ($errors->first('pro_avatar'))
          <span class="text-danger">
              {{ $errors->first('pro_avatar') }}
          </span>
      @endif
      </div>

      <div class="form-group">
        <label for="">Số lượng <span class="text-danger">(*)</span></label>
        <input type="number" name="pro_total" value="{{$product->pro_total}}"  class="form-control" >
      @if ($errors->first('pro_total'))
          <span class="text-danger">
              {{ $errors->first('pro_total') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Thuộc Size <span class="text-danger">(*)</span></label>
        <select name="pro_size" id="" class="form-control">
          <option value="">-- Click chọn Size --</option>
          @foreach ($sizes as $item)
          <option value="{{ $item->size_name }}">{{ $item->size_name }}</option>
          @endforeach
        </select>
      @if ($errors->first('pro_size'))
          <span class="text-danger">
              {{ $errors->first('pro_size') }}
          </span>
      @endif
      </div>
    </div>
    <div class="col-6">

      <div class="form-group">
        <label for="">Màu sắc <span class="text-danger">(*)</span></label>
        <select name="pro_color" id="" class="form-control">
          <option value="">-- Click chọn màu --</option>
          @foreach ($colors as $item)
          <option value="{{ $item->color_name }}">{{ $item->color_name }}</option>
          @endforeach
        </select>
      @if ($errors->first('pro_color'))
          <span class="text-danger">
              {{ $errors->first('pro_color') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Từ khóa <span class="text-danger">(*)</span></label>
        <select name="pro_tag" id="" class="form-control">
          <option value="">-- Click chọn từ khóa --</option>
          @foreach ($keywords as $item)
          <option value="{{ $item->k_name }}">{{ $item->k_name }}</option>
          @endforeach
        </select>
      @if ($errors->first('pro_tag'))
          <span class="text-danger">
              {{ $errors->first('pro_tag') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Mô tả<span class="text-danger">(*)</span></label>
        <textarea name="pro_desc" id="" cols="30" rows="4" class="form-control">
{{ $product->pro_desc}}
        </textarea>
      @if ($errors->first('pro_desc'))
          <span class="text-danger">
              {{ $errors->first('pro_desc') }}
          </span>
      @endif
      </div>
      <div class="form-group">
        <label for="">Chi tiết <span class="text-danger">(*)</span></label>
        <textarea name="pro_detail" id="" cols="20" rows="6" class="form-control">
{{ $product->pro_detail}}
        </textarea>
      @if ($errors->first('pro_detail'))
          <span class="text-danger">
              {{ $errors->first('pro_detail') }}
          </span>
      @endif
      </div>
      <a href="{{route('product.index')}}" class="btn btn-success">Trờ về</a>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
    
  </div>
 
  </form>
@endsection