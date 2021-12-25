@extends('admin.layouts.main')


@section('content')
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="card-header">
    <h3 class="card-title">Quản trị danh mục</h3>

    <div class="card-tools">
      <form action="" method="get">
        <div class="input-group input-group-sm" style="width: 350px;">
          <input type="text" name="key" class="form-control float-right" placeholder="Tìm kiếm">
          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
      </form>
      
      </div>
    </div>
  </div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Thời gian tạo </th>
        <th scope="col">
            <a href="{{route('category.create')}}" class="btn btn-primary">Thêm danh mục</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->c_name }}</td>
         <td>{{ $item->created_at }}</td>
         <td>
           <a href="{{ route('category.update',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('category.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
   
  </table>
  <div class="card-footer">
    <h3 class="card-title"></h3>

    <div class="card-tools" style="font-size: 18px">
      <ul class="pagination pagination-sm float-right">

        {{ $categories->links() }}
      </ul>
    </div>
  </div>
@endsection