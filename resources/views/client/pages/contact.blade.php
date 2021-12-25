@extends('client.component.main')
@section('content')
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Liên hệ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    <div class="contact__address">
                        <h5>Thông tin</h5>
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker"></i> Địa chỉ</h6>
                                <p>Mỹ Đình - Hà Nội</p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone"></i> Số điện thoại</h6>
                                <p><span>0123-456-789</span><span>0266-777-888</span></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-headphones"></i> Mail hỗ trợ</h6>
                                <p>Support.demo@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <h5>Gửi phản hồi</h5>
                        <form action="#">
                            <input type="text" placeholder="Họ và tên">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Tiêu đề">
                            <textarea placeholder="Nội dung"></textarea>
                            <button type="submit" class="site-btn">Gửi phản hồi</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.507253029407!2d105.7603142870954!3d21.027611304812243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bab9b67e93%3A0xbbe16aced529963f!2zTeG7uSDEkMOsbmgsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1640101884135!5m2!1svi!2s" width="860" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </iframe>
            </div>
        </div>
    </div>
</div>
</section>
@include('client.component.intagram')
@endsection