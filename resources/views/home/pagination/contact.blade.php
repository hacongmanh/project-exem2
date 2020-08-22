@extends('home.layout.layout')
@section('title' , 'Liên Hệ | Dog Lovers')
@section('header')
    <style>
        .low{
            visibility: hidden;
        }
    </style>
@endsection
@section('main-content')

@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> 08 Tôn Thất Thuyết, Mỹ Đình, Hà Nội </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Số điện thoại</span> <a href="tel://1234567920">+84 343895161</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email</span> <a href="Petsitting@gmail.com">Petsitting@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Trang web</span> <a href="https://petshophanoi.com/">petshophanoi.com/</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                           <div><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScP_2xSc-0f9knGQEcxuNDduh9LmaSte2nwE1h-SJ5nDttsiA/viewform?embedded=true" width="640" height="650" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe></div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5 img" style="background-image: url({{asset('home/images/img.jpg')}});">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
