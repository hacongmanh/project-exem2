@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link">Trang chủ</a></li>
        <li class="nav-item "><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Đăng tin</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Theo dõi</a></li>
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

@endsection
