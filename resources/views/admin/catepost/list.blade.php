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
        <th scope="col">Tên chuyên mục</th>
    
        <th scope="col">
            <a href="{{route('catepost.create')}}" class="btn btn-primary">Thêm chuyên mục</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($catepost as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->cate_post_title }}</td>
         
         <td>
           <a href="{{ route('catepost.edit',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('catepost.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
  <div class="card-footer">
    <h3 class="card-title"></h3>

    <div class="card-tools" style="font-size: 18px">
      <ul class="pagination pagination-sm float-right">

        {{ $catepost->links() }}
      </ul>
    </div>
  </div>
@endsection