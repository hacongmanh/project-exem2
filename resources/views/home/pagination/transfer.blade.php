@extends('home.layout.layout')
@section('title' , 'Sản Phẩm | Pet sitting')
@section('menu-navbar')
@section('header')
    <style>
        .block-7 .price .number {
            font-size: 20px;
            ext-decoration: underline;
        }
    </style>
@endsection
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng Thời Gian</a></li>
        <li class="nav-item active"><a href="/transfer" class="nav-link">Sản phẩm</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
        <li class="nav-item"><a href="/logins" class="nav-link">Đăng nhập</a></li>
    </ul>
@endsection
@section('main-content')
@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2>Sản Phẩm Của Cửa Hàng </h2>
                </div>
            </div>
            <div class="row">
                @foreach($transfer as $transfer_1)
                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                        <div class="block-7">
                            @foreach($transfer_1->large_photos as $photo )
                                <div class="img"  style=" background-image: url({{$photo}}); "></div>
                            @endforeach
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                        <div>{{$transfer_1->birthday}} &nbsp;  &nbsp;Tên: {{$transfer_1->name}}</div>
                                        <span style="font-size: 50px; !important;" class="price"> <span class="number">{{$transfer_1->price_format}}</span></span>
                                        <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                        <li>{{$transfer_1->color}}</li>
                                        <li>{{$transfer_1->birthday}}</li>
                                        <li>{{$transfer_1->gender}}</li>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>


        <div class="row">
        <div class="col-sm-12 col-md-5"></div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers">
                {{$transfer->links()}}
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
