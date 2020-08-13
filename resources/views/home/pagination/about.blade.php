@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link">Trang chủ</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Đăng tin</a></li>
        <li class="nav-item"><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
    </ul>
@endsection
@section('main-content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('home/images/bg_2.jpg')}}); background-position: 50% -69.2969px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span> About<i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Các thành viên trong nhóm</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/staff-1.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Hà Công Mạnh</h3>
                            <span class="position mb-2">Leader</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/staff-2.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Thanh Phong</h3>
                            <span class="position mb-2">Huấn Luyện Viên</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/staff-3.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Quân Nguyễn</h3>
                            <span class="position mb-2">Giám đốc điều hành</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/staff-4.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Hoàng Hiếu</h3>
                            <span class="position mb-2">Huấn Luyện Viên</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate fadeInUp ftco-animated"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
