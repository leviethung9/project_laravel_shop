@extends('client.component.main')
@section('content')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Danh mục </h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                
                                <div class="card">
                                    @if (isset($categories))
                                        @foreach ($categories as $item)
                                        <div class="card-heading">
                                            <a href="{{ route('get.product.cate_name',['cate_name'=>$item->id]) }}">{{ $item->c_name }}</a>
                                            <br>
                                        </div>
                                        @endforeach
                                    @endif
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="sidebar__sizes">
                        <div class="section-title">
                            <h4>Size</h4>
                        </div>
                        <div class="size__list">
                            @if (isset($sizes))
                                @foreach ($sizes as $item)
                                <label for="">
                                  Size giày:   <a href="" style="color: red;font-size:15px">{{ $item->size_name }}</a>
                                </label>
                                @endforeach
                            @endif
                           
                           
                        </div>
                    </div>
                    <div class="sidebar__sizes">
                        <div class="section-title">
                            <h4>Màu sắc</h4>
                        </div>
                        <div class="size__list">
                            @if (isset($colors))
                                @foreach ($colors as $item)
                                <label for="">
                                  Màu :   <a href="" style="color: red;font-size:15px">{{ $item->color_name }}</a>
                                </label>
                                @endforeach
                            @endif
                           
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    @if (isset($products))
                        @foreach ($products as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/uploads/{{$item->pro_avatar }}" style="background-image: url(&quot;/uploads/{{$item->pro_avatar }}&quot;);">
                                    <div class="label new">Sản phẩm mới</div>
                                    <ul class="product__hover">
                                        <li><a href="/uploads/{{$item->pro_avatar }}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"> </span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6 style="padding: 10px 0px"><a href="#">{{ $item->pro_name }}</a></h6>
                                    <div class="flex" style="display: flex;justify-content: space-around">
                                        
                                        <div class="product__price__sale badge badge-secondary" style="text-decoration: line-through;font-size: 16px">
                                            {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price_sale)}} VNĐ
                                        </div>
                                        <div class="product__price badge badge-info" style="font-size: 16px">
                                            {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price)}} VNĐ
                                        </div>
                                    </div>
                                    <br>
                                    <a href="{{ route('get.product.detail',$item->pro_slug.'-'.$item->id)}}" class="btn btn-danger">Xem thêm</a>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                   
                   
                    <div class="col-lg-12 text-center">
                       
                            {{ $products->links() }}
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('client.component.intagram')
@endsection