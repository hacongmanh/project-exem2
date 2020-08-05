@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="" class="nav-link">Trang chủ</a></li>
        <li class="nav-item active"><a href="" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="" class="nav-link">Timeline</a></li>
        <li class="nav-item"><a href="" class="nav-link">Đăng tin</a></li>
        <li class="nav-item"><a href="" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="" class="nav-link">Liên hệ</a></li>
    </ul>
@endsection
@section('main-content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('home/images/bg_2.jpg')}}); background-position: 50% -69.2969px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> About<i class="ion-ios-arrow-forward"></i></span></p>
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
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-1.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Tên</span>
                            <span class="price"><sup>$</sup> <span class="number">Giá</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-2.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Business</span>
                            <span class="price"><sup>$</sup> <span class="number">79</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-3.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Ultimate</span>
                            <span class="price"><sup>$</sup> <span class="number">109</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-1.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Tên</span>
                            <span class="price"><sup>$</sup> <span class="number">Giá</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-2.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Business</span>
                            <span class="price"><sup>$</sup> <span class="number">79</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-3.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Ultimate</span>
                            <span class="price"><sup>$</sup> <span class="number">109</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
