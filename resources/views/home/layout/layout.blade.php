<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

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
    @yield('header')
</head>
<body>
{{--wrap--}}
<div class="wrap">
    <div class="container">
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
{{--endwrap--}}
{{--navbar--}}
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
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
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Petsitting</h2>
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
                <div class="block-21 mb-4 d-flex">
                    <a class="img mr-4 rounded" style="background-image: url({{asset('home/images/dog2.jpg')}});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#">Nhật Bản phát hiện các ca mắc Covid-19 đầu tiên ở thú cưng</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> 04, 08, 2020</a></div>
                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                    </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                    <a class="img mr-4 rounded" style="background-image: url({{asset('home/images/dog1.jpg')}});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="#">Chỉ cần ngửi, chó có thể phát hiện được liệu bạn có bị nhiễm COVID-19 hay không</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> 04, 08, 2020</a></div>
                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                <h2 class="footer-heading">Đường dẫn nhanh</h2>
                <ul class="list-unstyled">
                    <li><a href="/" class="py-2 d-block">Trang chủ</a></li>
                    <li><a href="/about" class="py-2 d-block">Chúng tôi</a></li>
                    <li><a href="/flow" class="py-2 d-block">Theo dõi</a></li>
                    <li><a href="/blog" class="py-2 d-block">Blog</a></li>
                    <li><a href="/contact" class="py-2 d-block">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading"> Thông tin liên lạc</h2>
                <div class="block-23 mb-3">
                    <ul>
                        <li><span class="icon fa fa-map"></span><span class="text">08 Tôn Thất Thuyết, Mỹ Đình, Hà Nội</span></li>
                        <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+84 343895161</span></a></li>
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
@yield('script')
</body>
</html>
