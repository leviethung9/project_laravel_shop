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
        <th scope="col">Tên từ khóa</th>
        <th scope="col">slug </th>
        <th scope="col">Trạng thái </th>
        <th scope="col">
            <a href="{{route('keyword.create')}}" class="btn btn-primary">Thêm từ khóa</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($keyword as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->k_name }}</td>
         <td>{{ $item->k_slug }}</td>
         <td>
          @if ( $item->k_status == 1)
             <a href="{{ route('keyword.status',$item->id) }}" class="badge badge-info">Hiển thị</a>
           @else
           <a href="{{ route('keyword.status',$item->id) }}" class="badge badge-secondary">Đã ẩn</a>
            @endif
          </td>
         <td>
           <a href="{{ route('keyword.edit',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('keyword.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
  <div class="card-footer">
    <h3 class="card-title"></h3>

    <div class="card-tools" style="font-size: 18px">
      <ul class="pagination pagination-sm float-right">
        {{ $keyword->links() }}
      </ul>
    </div>
  </div>
@endsection