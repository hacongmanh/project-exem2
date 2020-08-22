@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Dog Lovers')
@section('header')
    <style>
        .low{
            visibility: hidden;
        }
    </style>
@endsection
@section('section')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
                    <section class="ftco-section bg-light">
                        <div class="container">
                            <div class="row d-flex">
                                <div class="col-md-12 ">
                                    <div class="blog-entry align-self-stretch">
                                        {{-- <a href="/blog/{{$blog->id}}" class="block-20 rounded"--}}
                                        {{-- style="background-image: url({{$blog->large_photo}});">--}}
                                        {{-- </a>--}}
                                        <div class="text p-4">
                                            <div class="meta mb-2">
                                                <div> {{$blog->updated_at}}</div>
                                            </div>
                                            <h3 class="heading">{!!$blog->description!!}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate fadeInUp ftco-animated">
                    <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(https://hoc24.vn/images/avt/avt3012717_256by256.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blog-home-1">Cách nuôi dạy chó</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 08-15-2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Trần Thanh Phong</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSSqywv_1N1mY-Di6NiNJPnVYi1bF8uTmMFzg&usqp=CAU;)"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blog-home-2">Thực phẩm rành riêng cho chó</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 08-15-2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Trần Thanh Phong</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTp3Wv0je-gA1SjZmXNp0DfrJZxCQeVey_ZPQ&usqp=CAU);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="/blog-home-3">Cách chăm sóc làm đẹp cho chó cưng</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 08-15-2020</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Trần Thanh Phong</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=673565916574744&autoLogAppEvents=1" nonce="uFGc5LFJ"></script>
                    <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5" data-width=""></div>
                </div>
            </div>
        </div>
    </section>

@endsection
