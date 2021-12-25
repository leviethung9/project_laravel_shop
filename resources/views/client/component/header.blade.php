 <!-- Offcanvas Menu Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="offcanvas-menu-wrapper">
     <div class="offcanvas__close">+</div>
     <ul class="offcanvas__widget">
         <li><span class="icon_search search-switch"></span></li>
         <li><a href="#"><span class="icon_heart_alt"></span>
             <div class="tip">2</div>
         </a></li>
         <li><a href="#"><span class="icon_bag_alt"></span>
             <div class="tip">2</div>
         </a></li>
     </ul>
     <div class="offcanvas__logo">
         <a href="{{ route('home') }}"><img src="{{asset('template/client/ashion-master/img/logo.png')}}" alt=""></a>
     </div>
     <div id="mobile-menu-wrap"></div>
     <div class="offcanvas__auth">
         <a href="#">Đăng nhập</a>
         <a href="#">Đăng ký</a>
     </div>
 </div>
 <!-- Offcanvas Menu End -->

 <!-- Header Section Begin -->
 <header class="header">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-3 col-lg-2">
                 <div class="header__logo">
                     <a href="{{ route('home') }}"><img src="{{asset('template/client/ashion-master/img/logo.png')}}" alt=""></a>
                 </div>
             </div>
             <div class="col-xl-5 col-lg-6">
                 <nav class="header__menu">
                     <ul>
                         <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                  
                         <li><a href="{{ route('get.shop') }}">Cửa hàng</a>
                            @if (isset($categories))
                            <ul class="dropdown">
                                @foreach ($categories as $item )
                                <li><a href="">{{ $item->c_name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                             
                         </li>
                         <li><a href="{{ route('get.about-us') }}">Giới thiệu</a></li>
                         <li><a href="{{ route('get.blog') }}">Tin tức</a></li>
                         <li><a href="{{ route('get.contact') }}">Liên hệ</a></li>
                     </ul>
                 </nav>
             </div>
             <div class="col-lg-4">
                 <div class="header__right">
                     <div class="header__right__auth">
                         @if (Auth::check())
                         <a href="{{ route('get.login') }}">Xin chào:{{ Auth::user()->name }}</a>
                         <a href="{{ route('get.logout') }}">Đăng xuất</a>
                         @else
                         <a href="{{ route('get.login') }}">Đăng nhập</a>
                         <a href="{{ route('get.register') }}">Đăng ký</a>
                         @endif
                     </div>
                     <ul class="header__right__widget">
                         <li><span class="icon_search search-switch"></span></li>
                         <li><a href="{{ route('get.shopping.list') }}"><span style="font-size: 22px" class="fa fa-cart-plus"></span>
                             <div class="tip">{{ Cart::count() }}</div>
                         </a></li>
                         {{-- <li><a href="#"><span class="icon_bag_alt"></span>
                             <div class="tip"></div>
                         </a></li> --}}
                     </ul>
                 </div>
             </div>
         </div>
         <div class="canvas__open">
             <i class="fa fa-bars"></i>
         </div>
     </div>
 </header>
 <!-- Header Section End -->