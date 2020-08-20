<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon"  href="https://img.icons8.com/cotton/64/000000/dog-footprint.png">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">

    {{--{{asset('home/')}}--}}
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous"/>
    @yield('header')
</head>
<body>
{{--wrap--}}
<div class="switcher-bar clearfix">
    <div class="wrap ">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+84 343895161</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span> petsitting@email.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="https://www.facebook.com/scdogshop/?__tn__=%2Cd%2CP-R&eid=ARAdVYt5d24HCTrrqc1nrmlKXb4S02fApdbY9SrZywYFsGWGncMFUSZYG1nHLyITC4UlVcZsGgvF4MAW" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="https://www.twitch.tv/chefdogshow" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="https://www.instagram.com/chomeoshop/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="https://www.youtube.com/user/meotinxinhtuoi" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtobe</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--endwrap--}}
{{--navbar--}}
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/homes"><span class="flaticon-pawprint-1 mr-2"></span>Pet Lovers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            @yield('menu-navbar')
        </div>
    </div>
</nav>

{{--endnavbar--}}
{{--main content--}}
@yield('main-content')
{{----}}
{{--section--}}
@yield('section')
{{----}}
{{--footer--}}
<div class="low" style=" border-radius: 100%; width: 80px;height: 70px; background-color: #6d7aad69;text-align: center; position: fixed; right: 50px; bottom: 10px">
    <a href="{{route('showCart')}}" class="nav-link"> <img src="https://img.icons8.com/material/48/000000/shopping-basket-2.png"/></a>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Pet Lovers</h2>
                <p>Petsitting! Trung tâm nuôi dưỡng và đào tạo pet uy tín, đạt chuẩn chất lượng quốc tế.</p>
                <p>Petsitting © 2020  PRIVACY POLICY</p>
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="https://www.twitch.tv/chefdogshow" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="https://www.facebook.com/scdogshop/?__tn__=%2Cd%2CP-R&eid=ARAdVYt5d24HCTrrqc1nrmlKXb4S02fApdbY9SrZywYFsGWGncMFUSZYG1nHLyITC4UlVcZsGgvF4MAW" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate fadeInUp ftco-animated"><a href="https://www.instagram.com/chomeoshop/" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Tin mới nhất</h2>
                @foreach($article_footer as $article_footer)
                <div class="block-21 mb-4 d-flex">
                    <a href="/blog/{{$article_footer->id}}"  class="img mr-4 rounded" style="background-image: url({{$article_footer->large_photo}});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="/blog/{{$article_footer->id}}">{{$article_footer->title}}</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> 04, 08, 2020</a></div>
                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                <h2 class="footer-heading">Đường dẫn nhanh</h2>
                <ul class="list-unstyled">
                    <li><a href="/homes" class="py-2 d-block">Trang chủ</a></li>
                    <li><a href="/about" class="py-2 d-block">Chúng tôi</a></li>
                    <li><a href="/blog" class="py-2 d-block">Blog</a></li>
                    <li><a href="/contact" class="py-2 d-block">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">



                <h2 class="footer-heading"> Thông tin liên lạc</h2>
                <div class="block-23 mb-3">
                    <ul>
                        <p>

                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                08 Tôn Thất Thuyết, Mỹ Đình, Hà Nội
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0953074184445!2d105.77955234972549!3d21.028872185929554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1597630355316!5m2!1svi!2s" width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>

                        <li style="margin-top: 20px"> <a href="#"><span class="icon fa fa-phone"></span><span class="text">+84 343895161</span></a></li>
                        <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">Petsitting@gmail.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{--endfooter--}}
{{--script--}}
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('home/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('home/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('home/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('home/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('home/js/google-map.js')}}js/google-map.js"></script>
<script src="{{asset('home/js/main.js')}}"></script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v8.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script src="{{asset('js/jquery.toast.min.js')}}"></script>
@yield('script')

<!-- Your Chat Plugin code -->
</body>
</html>
