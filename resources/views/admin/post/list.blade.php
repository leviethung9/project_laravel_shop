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
        <th scope="col">Tiêu đề bài viết</th>
        <th scope="col">Thuộc chuyên mục</th>
        <th scope="col">
            <a href="{{route('post.create')}}" class="btn btn-primary">Thêm bài viết</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($post as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->p_title }}</td>
         <td>{{ $item->p_cate }}</td>
         <td>
          <a href="{{ route('post.show',$item->id) }}" class="btn btn-info">Chi tiết <i class="fas fa-edit"></i></a>
           <a href="{{ route('post.edit',$item->id) }}" class="btn btn-warning">Sửa <i class="fas fa-edit"></i></a>
           <a href="{{ route('post.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
  <div class="card-footer">
    <h3 class="card-title"></h3>

    <div class="card-tools" style="font-size: 18px">
      <ul class="pagination pagination-sm float-right">
        {{ $post->links() }}
      </ul>
    </div>
  </div>
@endsection