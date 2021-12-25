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
        <th scope="col">Tên người dùng</th>
        <th scope="col">
            Email
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $item )
       <tr>
         <td>{{ $item->id }}</td>
         <td>{{ $item->name }}</td>
         <td>
            {{ $item->email }}
         </td>
       </tr>
       @endforeach
    </tbody>
  </table>
@endsection