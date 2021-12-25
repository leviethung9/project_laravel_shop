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
        <th scope="col">Thông tin người mua</th>
        <th scope="col">Số tiền thu</th>
        <th scope="col">
            Người mua là
        </th>
        <th scope="col"> Trạng thái </th>
        <th>Thao tác </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transactions as $item )
       <tr>
           <td>{{ $item->id }}</li></td>
         <td>
             <ul>
                 <li>Tên khách hàng: {{ $item->tst_name }}</li>
                 <li>Số điện thoại: {{ $item->tst_phone }}</li>
                 <li>Địa chỉ giao hàng: {{ $item->tst_address }}</li>
             </ul>
            </td>
         <td>  {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->tst_total_money)}} VNĐ</td>
       
         <td>
             @if ( $item->tst_user_id )
                 <span class="badge badge-primary"> Thành viên </span>
             @else
             <span class="badge badge-secondary"> Khách </span>
             @endif
             </td>
             <td>
                 {{ $item->tst_status }}
             </td>
         <td>
             <a href="{{ route('transaction.detail',$item->id) }}" class="btn btn-primary ">Xem <i class="fas fa-eye"></i></a>
           <a href="{{ route('transaction.destroy',$item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa')">Xóa <i class="fas fa-trash-alt"></i></a>
         </td>
       </tr> 
     @endforeach
    </tbody>
  </table>

{{-- 
  <div class="modal fade fade" id="modal-preview-transaction" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Chi tiết đơn hàng <b>#1</b></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="content">
           
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div> --}}
@endsection