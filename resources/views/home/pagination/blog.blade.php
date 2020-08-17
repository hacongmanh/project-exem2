@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Sản phẩm</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
        <li class="nav-item"><a href="/logins" class="nav-link">Đăng nhập</a></li>
    </ul>
@endsection
@section('main-content')

@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                @foreach($article as $list)
                    <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded"
                               style="background-image: url({{$list->large_photo}});">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><a href="#">{{$list->updated_at}}</a></div>
                                    <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="#">{{$list->title}}</a></h3>
                            </div>
                        </div>
                    </div>
        @endforeach
    </section>
    <div class="row">
        <div class="col-sm-12 col-md-5"></div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers">
                {{$article->links()}}
            </div>
        </div>
    </div>
    </div>

@endsection

