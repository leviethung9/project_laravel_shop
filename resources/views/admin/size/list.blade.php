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
        <th scope="col">Tên size</th>
        <th scope="col">
            <a href="{{route('size.create')}}" class="btn btn-primary">Thêm size</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($sizes as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->size_name }}</td>
         <td>
           <a href="{{ route('size.edit',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('size.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
@endsection