@extends('client.component.main')
@section('content')

<div class="container">
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Tin tức - bài viết</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Chuyên mục </h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    
                                    <div class="card">
                                        @if (isset($catepost))
                                            @foreach ($catepost as $item)
                                            <div class="card-heading">
                                                <a data-toggle="collapse" data-target="#collapseFive">{{ $item->cate_post_title }}</a>
                                                <br>
                                            </div>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                        
                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="blog__details__content">
                        <div class="blog__details__item">
                            <img src="/uploads2/{{ $post->p_avatar }}" alt="" class="w-100 img-fluid">
                            <div class="blog__details__item__title">
                                <span class="tip">{{ $post->p_cate }}</span>
                                <h4>{{ $post->p_title }}</h4>
                                <ul>
                                    <li style="font-size: 16px;color:#333">Đăng bởi <span>Admin 1</span></li>
                                    <li style="font-size: 16px;color:#322">Ngày đăng: {{ $post->created_at->format('d-m-Y') }}</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="blog__details__desc">
                           <p>
                               {{--  --}}
                               {!!  $post->p_content !!}
                            </p> 
                        </div>
                       
                        <div class="blog__details__btns">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__btn__item">
                                        <h6><a href="#"><i class="fa fa-angle-left"></i> Bài viết cũ</a></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__btn__item blog__details__btn__item--next">
                                        <h6><a href="#">Sang bài viết mới <i class="fa fa-angle-right"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

   
</div>
@include('client.component.intagram')
@endsection