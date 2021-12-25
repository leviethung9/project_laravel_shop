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
        <th scope="col">STT</th>
        <th scope="col">id giao dịch</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Hình ảnh sản phẩm</th>
        <th scope="col">
            số lượng
        </th>
        <th scope="col"> Giá tiền </th>
        <th>Thao tác </th>
      </tr>
    </thead>
    <tbody>
     
      @foreach ($orders as $key => $item )
      
       <tr>
           <td>{{ $key++ }}</td>
           <td>{{ $item->od_transaction_id  }}</td>
           <td>{{ $item->hasProduct->pro_name }}</td>
           <td> 
             <img src="/uploads/{{ $item->hasProduct->pro_avatar }}" alt="" class="img-fluid w-50 img-thumbnail" style="height: 180px">
            </td>
           <td>{{ $item->od_qty }}</td>
           <td>{{ $item->od_price }}</td>
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