@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Đăng tin</a></li>
        <li class="nav-item "><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Blog</a></li>
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
                    <h1 class="mb-0 bread">Chi sẻ kinh nghiệm của những người nuôi chó</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('home/images/image_1.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 07, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('home/images/image_3.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 07, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('home/images/image_2.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 07, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('home/images/image_4.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 07, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('home/images/dog2.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 08, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Nhật Bản phát hiện các ca mắc Covid-19 đầu tiên ở thú cưng</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('home/images/dog1.jpg')}});">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 08, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Chỉ cần ngửi, chó có thể phát hiện được liệu bạn có bị nhiễm COVID-19 hay không</a></h3>
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
        </div>
    </section>
@endsection
