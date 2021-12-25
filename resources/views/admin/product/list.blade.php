@extends('admin.layouts.main')


@section('content')
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Giá </th>
        <th scope="col">Giá khuyến mại</th>
        <th scope="col">Thuộc danh mục </th>
        <th scope="col">Slug </th>
        <th scope="col">
            <a href="{{route('product.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->pro_name }}</td>
         <td><span style="font-size: 16px" class="badge badge-success">{{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price)}} VNĐ</span> </td>
         <td><span style="font-size: 16px" class="badge badge-info">{{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price_sale)}} VNĐ</span></td>
         <td>{{ $item->pro_name_cate }}</td>
         <td>{{ $item->pro_slug }}</td>
         <td>
          <a href="{{ route('product.show',$item->id) }}" class="btn btn-info">Chi tiết <i class="fas fa-info-circle"></i></a>
           <a href="{{ route('product.edit',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('product.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
  <div class="card-footer">
    <h3 class="card-title"></h3>

    <div class="card-tools" style="font-size: 18px">
      <ul class="pagination pagination-sm float-right">
        {{ $products->links() }}
      </ul>
    </div>
  </div>
@endsection