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
        <th scope="col">Tên màu</th>
        <th scope="col">
            <a href="{{route('color.create')}}" class="btn btn-primary">Thêm màu</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($colors as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->color_name }}</td>
         <td>
           <a href="{{ route('color.edit',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('color.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
  <div class="card-footer">
    <h3 class="card-title"></h3>

    <div class="card-tools" style="font-size: 18px">
      <ul class="pagination pagination-sm float-right">
        {{ $colors->links() }}
      </ul>
    </div>
  </div>
@endsection