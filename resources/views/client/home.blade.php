@extends('client.component.main')
@section('content')
@include('client.component.banner')

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản phẩm mới</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                @if (isset($categories))
               
                <ul class="filter__controls">
                    @foreach ($categories as $item)
                    <li class="" style="font-size: 18px" data-filter="*">
                        {{ $item->c_name }}
                    </li>
                   
                    @endforeach
                </ul>
               
                
                @endif
            </div>
        </div>
   
        <div class="row property__gallery">
          
                @if (isset($products))
                @foreach ($products as $item)
               @include('client.component.product-item',['item'=>$item])
                @endforeach
                @endif
           
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="{{asset('template/client/ashion-master/img/banner/banner-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>The Project Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Bài viết mới</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                @if (isset($catepost))
               
                <ul class="filter__controls">
                    @foreach ($catepost as $item)
                    <li class="" style="font-size: 18px" data-filter="*">
                        {{ $item->cate_post_title }}
                    </li>
                   
                    @endforeach
                </ul>
               
                
                @endif
            </div>
        </div>
        <div class="row">
            @if (isset($post))
                @foreach ($post as $item)
               @include('client.component.post-item',['item'=>$item])
                @endforeach
                @endif
        </div>
    </div>
</section>
<!-- Trend Section Begin -->
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Hot trend</h4>
                    </div>
                    @foreach ($products as $item)
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="uploads/{{ $item->pro_avatar }}" style="width:120px!important;" alt="" class=" ">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{ $item->pro_name }}</h6>
                            <br>
                            <div class="product__price">
                                {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price)}} VNĐ
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Giảm giá</h4>
                    </div>
                    @foreach ($products as $item)
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="uploads/{{ $item->pro_avatar }}" style="width:120px!important;" alt="" class=" ">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{ $item->pro_name }}</h6>
                            <br>
                            <div class="product__price">
                                {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price)}} VNĐ
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Nổi bật</h4>
                    </div>
                    @foreach ($products as $item)
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="uploads/{{ $item->pro_avatar }}" style="width:120px!important;" alt="" class=" ">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{ $item->pro_name }}</h6>
                            <br>
                            <div class="product__price">
                                {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $item->pro_price)}} VNĐ
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="{{asset('template/client/ashion-master/img/discount.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Khuyến mại</span>
                        <h2>Mùa thu 2019</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Ngày</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Giờ</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Phút</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Giây</p>
                        </div>
                    </div>
                    <a href="{{ route('get.shop') }}">Mua hàng ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Miễn phí vận chuyển</h6>
                    <p>Cho các đơn hàng trên 10 triệu</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Hoàn tiền</h6>
                    <p>Nếu có lỗi từ shop</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online 24/7</h6>
                    <p>Luôn luôn hỗ trợ khách hàng</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Thanh toán</h6>
                    <p>Thanh toán</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<!-- Instagram Begin -->
@include('client.component.intagram')
<!-- Instagram End -->
@endsection