@extends('client.component.main')
@section('content')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>giỏ hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shopping as $key => $item)
     
                            <tr>
                                <td class="">
                                  <a href="{{ route('get.product.detail',$item->name.'-'.$item->id) }}">
                                    <h6>{{ $item->name }}</h6>
                                  </a>
                                </td>
                                <td>
                                    <img src="/uploads/{{$item->options->image }}" alt="" class="img-fluid w-80 img-thumbnail " style="height: 80px">
                                </td>
                                <td class="cart__price">
                                     {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->price) }} VNĐ
                                    {{-- Giá sale: {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->options->pro_price_sale) }} VNĐ --}}
                                </td>
                                <td class="cart__quantity">
                                    <div class="pro-qty"><span class="dec qtybtn">-</span>
                                        <input type="text" value="{{ $item->qty }}">
                                    <span class="inc qtybtn">+</span></div>
                                </td>
                                <td class="cart__total">
                                    {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->price * $item->qty) }} VNĐ
                                  
                                </td>
                                <td class="cart__close">
                        
                                    <a href="{{ route('get.shopping.delete',$key) }}">
                                        <span class="icon_close"></span>
                                    </a>
                                
                                </td>
                            </tr>
                           
                            @endforeach
                            <tr>
                                <td style="font-weight: 550;color:maroon"> Tổng tiền: {{ Cart::subtotal(0) }} VND</td>
                                <td></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn">
                    <a href="{{ route('get.shop') }}">Tiếp tục mua hàng</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                {{-- <div class="cart__btn update__btn">
                    <a href="#"><span class="icon_loading"></span> Update cart</a>
                </div> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
              
                <div>
                    
                    <h4 class="text-center" style="padding:15px 0px">
                        Thông tin đặt hàng 
                    </h3>
                    <form action="{{ route('get.shopping.pay') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tst_name">Họ và tên: <span style="color: red">*</span></label>
                            <input type="text" name="tst_name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tst_phone">Điện thoại: <span style="color: red">*</span></label>
                            <input type="number" name="tst_phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tst_address">Địa chỉ: <span style="color: red">*</span></label>
                            <input type="text" name="tst_address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Thanh toán khi nhận hàng </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                {{-- <div class="cart__total__procced">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 750.0</span></li>
                        <li>Total <span>$ 750.0</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@include('client.component.intagram')
@endsection