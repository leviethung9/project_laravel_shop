@extends('client.component.main')
@section('content')
    <div class="container">
        <div class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Trang chủ</a>
                            <span>Giới thiệu</span>
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
                                                    <a data-toggle="collapse"
                                                        data-target="#collapseFive">{{ $item->cate_post_title }}</a>
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
                    <div class="row">
                        <p>Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều
                            là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn
                            mạnh.

                        </p>
                        <p>
                            Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều
                            là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn
                            mạnh.
                        </p>
                        <p>
                            Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử
                            Converse 100 năm, và đang không ngừng phát triển lớn mạnh

                        </p>
                        <p>
                            Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử
                            Converse 100 năm, và đang không ngừng phát triển lớn mạnh
                        </p>
                        <p>
                            Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử
                            Converse 100 năm, và đang không ngừng phát triển lớn mạnh
                        </p>
                        <p>
                            Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử
                            Converse 100 năm, và đang không ngừng phát triển lớn mạnh
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    @include('client.component.intagram')
@endsection
