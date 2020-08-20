@extends('home.layout.layout')
@section('title' , 'Dòng Thời Gian | Pet sitting')
@section('header')
    <style>
        .txt-coment {
            background: #dce2e2 !important;
            border: aliceblue !important;
            height: 62.5px;
            margin-top: 5px;
            margin-right: 30px;
            border-radius: 30px!important;
            cursor: pointer;
            margin: 10px;
        }
        .txt-1{
            background: #eaefef !important;
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

        }
        .border-cmt{
            /*height: 10rem;*/
            border-radius: 20px;
            background: #dce2e2;
            margin-bottom: 10px;
        }
        .border-all{
            border-radius: 20px;
            background: #eaefef;
        }
        .cmt{
            ;
        }
    </style>
@endsection
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Dòng thời Gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Sản phẩm</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
        <li class="nav-item"><a href="/logins" class="nav-link">Đăng nhập</a></li>
    </ul>
@endsection
@section('main-content')

@endsection
@section('section')
    <section class="ftco-section">
{{--        @foreach($timeline as $timelines)--}}
        <div class="container">

            <div class="row border-all">

                <div class="col-12 row">
{{--                    <div class="col-1"><img  class="rounded-circle" src="{{$timelines->account->thumbnail}}" alt="" style="height: 3.75rem ; width: 3.75rem;cursor: pointer;    margin: 10px;"></div>--}}
                    <div class="col-5" style="margin: 10px;">
{{--                       <b>{{$timelines->account->full_name}}</b>--}}
{{--                        <div>{{$timelines->updated_at}}</div>--}}
                    </div>
                </div>
                <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/test.jpg')}});height: 50rem">
{{--                        <a href="{{$timelines->account->thumbnail}}" class="icon image-popup d-flex justify-content-center align-items-center">--}}
{{--                            <span class="fa fa-expand"></span>--}}
{{--                        </a>--}}
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html">Mèo Ba Tư</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 row">
                    <div class="col-12 row">
                        <div class="col-1"><img  class="rounded-circle" src="https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-1/p160x160/116578779_745283332963999_4699667717007825853_n.jpg?_nc_cat=103&_nc_sid=dbb9e7&_nc_ohc=6P6IbQ7WLA4AX_BbzO3&_nc_ht=scontent.fhan2-6.fna&_nc_tp=6&oh=9db163447abf217468fa05dc68b6cf9a&oe=5F4D8D23" alt="" style="height: 3.75rem ; width: 3.75rem;cursor: pointer;">
                        </div>
{{--                        @foreach($comment as $comments)--}}
{{--                        <div class="col-11 border-cmt">--}}
{{--                            <a href=""><b>{{$comments->full_name}}</b></a>--}}
{{--                            <div class="col-12 background-cmt">{{$comments->comment}}</div>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-10 row cmt">
                        <div class="col-12 row txt-coment">
                            <div class="col-1"><img  class="rounded-circle" src="https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-1/p160x160/116578779_745283332963999_4699667717007825853_n.jpg?_nc_cat=103&_nc_sid=dbb9e7&_nc_ohc=6P6IbQ7WLA4AX_BbzO3&_nc_ht=scontent.fhan2-6.fna&_nc_tp=6&oh=9db163447abf217468fa05dc68b6cf9a&oe=5F4D8D23" alt="" style="height: 3rem;width: 3rem;margin: 7px;cursor: pointer;"></div>
                            <div class="col-10"><input  class=" form-control txt-1"  type="text" name="name"></div>
                            <div class="col-1">
                                <button class="btn-enter " type="button">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-paper-plane"></span></div>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            </div>
{{--            @endforeach--}}
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
