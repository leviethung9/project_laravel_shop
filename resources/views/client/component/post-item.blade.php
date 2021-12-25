<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="blog__item">
        <div class="blog__item__pic set-bg" data-setbg="/uploads2/{{$item->p_avatar }}" style="background-image: url(&quot;/uploads2/{{$item->p_avatar }}&quot;);"></div>
        <div class="blog__item__text">
            <h6 style="font-size: 15px"><a href="{{ route('get.blog.detail',$item->id) }}">{{$item->p_title}}</a></h6>
            <ul>
                <li>Người đăng: Admin 1</li>
                <li>{{$item->created_at }}</li>
            </ul>
        </div>
    </div>
</div>