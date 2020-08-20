@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Sản Phẩm</a></li>
        <li class="nav-item"><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item active"><a href="#" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/logins" class="nav-link">Đăng nhập</a></li>
    </ul>
@endsection
@section('main-content')
@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/102456998_1426034140933872_6112381375411431659_n.jpg')}});"></div>
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
                <div class="col-md-6 col-lg-9 ">
                    <h3>Câu nói yêu thích của Mạnh :</h3>
                    <span>Loài chó ấy, chúng gần gũi với chúng ta đến mức, từ những ngày nằm nôi chúng đã quấn quýt, hôn và liếm láp lên mặt ta rồi. Chúng lớn lên cùng ta, vui buồn cùng ta, và bất kể ta gặp phải bao nhiêu khó khăn trong cuộc đời chúng cũng sẽ không bao giờ bỏ rơi ta mà đi, cho đến hơi thở cuối cùng</span>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 col-lg-9"><h3>Câu nói yêu thích của Phong :</h3>
                    <span>Chó sẽ dạy bạn tình yêu thương vô điều kiện. Nếu bạn có điều đó trong đời, cuộc sống hẳn sẽ không quá tồi tệ.</span>
                    <img src="" alt="">
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/61057499_2241042396149052_8211544296730394624_o.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Trần Thanh Phong</h3>
                            <span class="position mb-2">Thành Viên</span>
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

            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/501208E3-8D49-4E08-BDA7-84F1DFB76EDD.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Nguyễn Đức Quân</h3>
                            <span class="position mb-2">Thành Viên</span>
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
                <div class="col-md-6 col-lg-9">
                    <h3>Câu nói yêu thích của Quân : </h3>
                    <span>Tôi không dám ăn thịt chó, vì luôn sợ sẽ ăn nhầm thịt một người bạn trung thành, sợ ăn nhầm mất kẻ canh giữ tuổi thơ của một đứa trẻ, sợ ăn nhầm đôi mắt của một người mù và sợ mình lỡ ăn mất người thân của một gia đình.</span>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 col-lg-9">
                    <h3>Câu nói yêu thích của Hiếu :</h3>
                    <span>Khi bạn cứu một chú chó, có thể điều đó sẽ không là gì trong thế giới của bạn, nhưng bạn đã thay đổi thế giới của chúng rồi.</span>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                    <div class="staff">

                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{asset('home/images/A8873CB8-69E7-49CD-BBDD-F163D10D6020.jpg')}});"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>Trịnh Hoàng Hiếu</h3>
                            <span class="position mb-2">Thành Viên </span>
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
