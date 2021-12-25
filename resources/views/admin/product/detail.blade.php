@extends('admin.layouts.main')


@section('content')
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('product.index')}}" class="btn btn-primary">Trở về</a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Giá </th>
        <th scope="col">Giá khuyến mại</th>
        <th scope="col">Thuộc danh mục </th>
        <th scope="col">Slug </th>
        <th scope="col">Thuộc Size </th>
        <th scope="col">Màu sắc </th>
        <th scope="col">Từ khóa </th>
        <th scope="col">Hình ảnh </th>
        
        <th scope="col">Số lượng </th>
        <th scope="col">Mô tả </th>
        <th scope="col">Chi tiết </th>
        <th scope="col">
            Thao tác
        </th>
      </tr>
    </thead>
    <tbody>
     
       <tr>
         <td>{{ $product->id }}</td>
         <td>{{ $product->pro_name }}</td>
         <td> <span class="badge badge-success">{{ $product->pro_price }} VNĐ</span>  </td>
         <td> <span class="badge badge-info">{{ $product->pro_price_sale }} VNĐ</span> </td>
         <td>{{ $product->pro_name_cate }}</td>
         <td>{{ $product->pro_slug }}</td>
         <td>{{ $product->pro_size }}</td>
         <td>{{ $product->pro_color }}</td>
         <td>{{ $product->pro_tag }}</td>
         <td>
           <img src="/uploads/{{$product->pro_avatar }}" class="img-fluid w-100 img-thumbnail" alt="">
          </td>
         <td>{{ $product->pro_total }}</td>
         <td>{{ $product->pro_desc }}</td>
         <td>{{ $product->pro_detail }}</td>
         <td>
           <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('product.destroy',$product->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
      
    </tbody>
  </table>
@endsection