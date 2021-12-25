<div class="col-lg-3 col-md-4 col-sm-6 mix women">
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