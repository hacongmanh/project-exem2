@extends('home.layout.layout')
@section('title' , 'Timeline | Pet sitting')
@section('header')
    <style>
        .txt-coment {
            background: #dce2e2 !important;
            border: aliceblue !important;
            height: 50px;
            margin-top: 5px;
            margin-right: 30px;
            border-radius: 30px!important;
            cursor: pointer;
        }
        .btn-enter{
            border-radius: 100%;
            border: none;
            height: 3rem;
            width: 3rem;
            text-align: center;
            margin: 6px;
            border-radius: 100%; border: none ; color: #0e84b5;
            cursor: pointer;
        }
        .btn-enter:hover{
            background-color: #0e84b5;
            color: #dce2e2;
        }
        .btn-enter:active{
            border: none;
        }
        .background-cmt{
            background-color: #;
        }
    </style>
@endsection
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item active"><a href="" class="nav-link">Timeline</a></li>
        <li class="nav-item"><a href="" class="nav-link">Lưu chữ</a></li>
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
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span> About<i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Timeline ngẫu nhiên</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('section')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-12">comnet</div>
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/test.jpg')}});height: 50rem">
                        <a href="{{asset('home/images/gallery-1.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html">Mèo Ba Tư</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 background-cmt">
                    <span class="col-1">
                        <img  class="rounded-circle" src="https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-1/p160x160/116578779_745283332963999_4699667717007825853_n.jpg?_nc_cat=103&_nc_sid=dbb9e7&_nc_ohc=6P6IbQ7WLA4AX_BbzO3&_nc_ht=scontent.fhan2-6.fna&_nc_tp=6&oh=9db163447abf217468fa05dc68b6cf9a&oe=5F4D8D23" alt="" style="height: 3.75rem ; width: 3.75rem;cursor: pointer;">
                    </span>
                </div>
                <div class="col-12">
                    <div class="btn-toolbar justify-content-between border" role="toolbar" aria-label="Toolbar with button groups" style="border-radius: 30px ; margin-left: 20px">
                    <span class="col-1">
                        <img  class="rounded-circle" src="https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-1/p160x160/116578779_745283332963999_4699667717007825853_n.jpg?_nc_cat=103&_nc_sid=dbb9e7&_nc_ohc=6P6IbQ7WLA4AX_BbzO3&_nc_ht=scontent.fhan2-6.fna&_nc_tp=6&oh=9db163447abf217468fa05dc68b6cf9a&oe=5F4D8D23" alt="" style="height: 3.75rem ; width: 3.75rem;cursor: pointer;">
                    </span>

                        <input  class="col-10 txt-coment form-control"  type="text" name="name">
                        <button class="btn-enter " type="button">
                        <div class="icon d-flex align-items-center justify-content-center col-1"><span class="fa fa-paper-plane"></span></div>
                        </button>
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
        </div>
    </section>
@endsection
