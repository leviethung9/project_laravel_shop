@extends('client.component.main')
@section('content')

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>{{ $product->pro_name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll" tabindex="1"
                            style="overflow-y: hidden; outline: none;">
                            <a class="pt active" href="#product-1">
                                <img src="/uploads/{{ $product->pro_avatar }}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="/uploads/{{ $product->pro_avatar }}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="/uploads/{{ $product->pro_avatar }}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="/uploads/{{ $product->pro_avatar }}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel owl-loaded">




                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1324px;">
                                        <div class="owl-item active" style="width: 331px;"><img data-hash="product-1"
                                                class="product__big__img" src="/uploads/{{ $product->pro_avatar }}"
                                                alt="">
                                        </div>
                                        <div class="owl-item" style="width: 331px;"><img data-hash="product-2"
                                                class="product__big__img" src="/uploads/{{ $product->pro_avatar }}"
                                                alt="">
                                        </div>
                                        <div class="owl-item" style="width: 331px;"><img data-hash="product-3"
                                                class="product__big__img" src="/uploads/{{ $product->pro_avatar }}"
                                                alt="">
                                        </div>
                                        <div class="owl-item" style="width: 331px;"><img data-hash="product-4"
                                                class="product__big__img" src="/uploads/{{ $product->pro_avatar }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation"
                                        class="owl-prev disabled"><i class="arrow_carrot-left"></i></button><button
                                        type="button" role="presentation" class="owl-next"><i
                                            class="arrow_carrot-right"></i></button></div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{ $product->pro_name }}<span>Danh mục:{{ $product->pro_name_cate }} </span></h3>

                        <div class="product__details__price">
                            {{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $product->pro_price_sale) }} VNĐ
                            <span>{{ preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $product->pro_price) }} VNĐ</span>
                        </div>
                        <p>
                            {{ $product->pro_desc }}
                        </p>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>số lượng:</span>
                                <div class="pro-qty"><span class="dec qtybtn">-</span>
                                    <input type="text" value="1">
                                    <span class="inc qtybtn">+</span>
                                </div>
                            </div>
                            <a href="{{ route('get.shopping.add',$product->id)}} " onclick=showAlert() class="cart-btn">
                                <span class="icon_bag_alt"></span> Thêm vào giỏ hàng
                            </a>
                          <script >
                              function showAlert()
                              {
                                alert("Đã thêm sản phẩm vào giỏ hàng");
                              }
                          </script>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Tình trạng:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin" style="color: #111">

                                            @if ($product->pro_total >= 1)
                                                {{ 'Còn hàng' }}
                                            @else
                                            {{ 'Hết hàng' }}
                                            @endif
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Màu sắc</span>
                                    <div class="color__checkbox">
                                        {{ $product->pro_color }}
                                    </div>
                                </li>
                                <li>
                                    <span>size:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">
                                            {{ $product->pro_size }}
                                        </label>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Chi tiết</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Chi tiết sản phẩm</h6>

                                <p>
                                    {{ $product->pro_detail }}
                                </p>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <h6>Đánh giá sản phẩm</h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                    consequat massa quis enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Sản phẩm liên quan</h5>
                    </div>
                </div>
                @foreach ($productLike as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/uploads/{{$item->pro_avatar }}"
                            style="background-image: url(&quot;/uploads/{{$item->pro_avatar }}&quot;);">
                            <div class="label new">Mới</div>
                            <ul class="product__hover">
                                <li><a href="/uploads/{{ $item->pro_avatar }}" class="image-popup"><span
                                            class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $item->pro_name }}</a></h6>
                            <div class="rating">
                               
                            </div>
                            <div class="product__price">{{ $item->pro_price }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
               
               
            </div>
        </div>
    </section>
    @include('client.component.intagram')
@endsection
