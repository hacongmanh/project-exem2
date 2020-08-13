@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng Thời Gian</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Đăng tin</a></li>
        <li class="nav-item"><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
    </ul>
@endsection
@section('main-content')
    <section class="hero-wrap hero-wrap-2"
             style="background-image: url({{asset('home/images/bg_2.jpg')}}); background-position: 50% -69.2969px;"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span> About<i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Đăng tin bán chó</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2>Tin Giao Bán </h2>
                </div>
            </div>
            <div class="row">
                @foreach($transfer as $transfer_1)
                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                        <div class="block-7">
                            <div class="img" style="background-image: url({{$transfer_1->thumbnail}});"></div>
                            <div class="text-center p-4">
                                <span class="excerpt d-block">{{$transfer_1->name}}</span>
                                <span class="price"><sup>$</sup> <span class="number">{{$transfer_1->price}}</span></span>

                                <ul class="pricing-text mb-5">
                                    <li><span class="fa fa-check mr-2"></span>{{$transfer_1->color}}</li>
                                    <li><span class="fa fa-check mr-2"></span>{{$transfer_1->birthday}}</li>
                                    <li><span class="fa fa-check mr-2"></span>{{$transfer_1->gender}}</li>
                                </ul>

                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
