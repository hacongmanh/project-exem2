@extends('home.layout.layout')
@section('title' , 'Trang chủ | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="" class="nav-link">Trang chủ</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Đăng tin</a></li>
        <li class="nav-item"><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Liên hệ</a></li>
    </ul>
@endsection
@section('main-content')
    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('home/images/bg_1.jpg')}}); height: 969px; background-position: 50% 170px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true" style="height: 969px;">
                <div class="col-md-11 ftco-animate text-center fadeInUp ftco-animated">
                    <h1 class="mb-4">Bạn là người yêu chó bạn muốn lưu chữ kỉ niệm đẹp  </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('section')

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate fadeInUp ftco-animated">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-blind"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Cách nuôi dạy chó</h3>
                            <p>Nắm rõ kinh nghiệm nuôi chó thì mới có thể giúp cho chú cún của bạn khỏe mạnh. Không phải bạn cứ ra cửa hàng chọn một em nhanh nhẹn về và cho ăn thật nhiều, tắm sạch sẽ là được. Vậy phải làm thế nào?</p>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate fadeInUp ftco-animated">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-dog-eating"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Thực phẩm riêng cho chó</h3>
                            <p>Bạn là người chăm sóc chó của mình và muốn điều tốt nhất cho cún cưng. Sức khỏe của chúng phần lớn do thức ăn quyết định. Tuy nhiên, có quá nhiều lựa chọn về thức ăn, làm thế nào bạn chọn được thứ tốt nhất cho chó của mình?</p>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate fadeInUp ftco-animated">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-grooming"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Cách chăm sóc làm đẹp cho chó</h3>
                            <p>Nếu là người chủ tốt, đôi lúc bạn phải cạo lông cho chó nếu thời tiết quá nóng. Trên thực tế, chó không cần phải cạo lông, nếu có thì cũng nên do chuyên gia thực hiện. Tuy nhiên, nếu muốn đích thân cạo lông cho chúng, bạn cần hết sức cẩn trọng và bảo đảm an toàn cho người bạn của mình.</p>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light ftco-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{asset('home/images/about.jpg')}});">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="img img-2 mr-md-2" style="background-image:url({{asset('home/images/about-2.jpg')}});"></div>
                        <div class="img img-2 ml-md-2" style="background-image:url({{asset('home/images/about-3.jpg')}});"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
                        <h2 class="mb-3">Câu hỏi thường gặp</h2>
                        <p>Những câu hỏi mà người nuôi chó hay hỏi chúng tôi là : </p>
                    </div>
                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0">
                                    <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                        <p class="mb-0">Làm thế nào để huấn luyện chó cưng của bạn?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" style="">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Thành thạo huấn luyện căn bản</li>
                                        <li>Huấn luyện chó con đi vệ sinh</li>
                                        <li>Huấn luyện chó con ngừng cắn và gặm</li>
                                        <li>Huấn luyện chó con tuân theo lệnh cơ bản</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingTwo" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="mb-0">Những điều cần biết khi mới nuôi chó là gì ?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" style="">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Cần xác định rõ về điều kiện kinh tế, công việc và gia đình</li>
                                        <li>Hãy chắc chắn rằng bạn chọn loại thức ăn phù hợp với chó</li>
                                        <li>Chuẩn bị một chỗ ngủ đủ tốt</li>
                                        <li>Học cách huấn luyện chó đi vệ sinh đúng chỗ</li>
                                        <li>Thỉnh thoảng hãy để chó có không gian riêng tư</li>
                                        <li>Tạo một thói quen với cún cưng</li>
                                        <li>Lưu ý về thời gian tẩy giun, chăm sóc sức khỏe định kỳ của chó</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingThree" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">Tại sao phải tiêm phòng vacxin cho thú cưng?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingFour" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                        <p class="mb-0">Làm sao để chăm chó đẻ ?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2>Tin Giao Bán </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-1.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Tên</span>
                            <span class="price"><sup>$</sup> <span class="number">Giá</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-2.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Business</span>
                            <span class="price"><sup>$</sup> <span class="number">79</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('home/images/pricing-3.jpg')}});"></div>
                        <div class="text-center p-4">
                            <span class="excerpt d-block">Ultimate</span>
                            <span class="price"><sup>$</sup> <span class="number">109</span></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Tiêm Phòng</li>
                                <li><span class="fa fa-check mr-2"></span>Thưc ăn</li>
                                <li><span class="fa fa-check mr-2"></span>Sinh Nhật</li>
                                <li><span class="fa fa-check mr-2"></span>Số lần tắm trên tuần</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2>Dòng thời gian</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/gallery-1.jpg')}});">
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
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/gallery-2.jpg')}});">
                        <a href="{{asset('home/images/gallery-2.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Pomeranian</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/gallery-3.jpg')}});">
                        <a href="{{asset('home/images/gallery-3.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html">Mèo Sphynx</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/gallery-4.jpg')}});">
                        <a href="{{asset('home/images/gallery-4.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Cat</span>
                                <h2><a href="work-single.html"> Mèo lông ngắn Anh </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/gallery-5.jpg')}});">
                        <a href="{{asset('home/images/gallery-5.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Beagle</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{asset('home/images/gallery-6.jpg')}});">
                        <a href="{{asset('home/images/gallery-6.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <span>Dog</span>
                                <h2><a href="work-single.html">Pug</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2>Tin tức mới nhất từ blog của chúng tôi</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('home/images/dog1.jpg')}}');">
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
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('home/images/dog2.jpg')}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">04, 07, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Nhật Bản phát hiện các ca mắc Covid-19 đầu tiên ở thú cưng</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('home/images/dog4.jpg')}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">05, 08, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Chú chó nổi tiếng MXH sau khi xuất hiện với biểu cảm buồn rười rượi vì không được ra ngoài chơi do lệnh phong tỏa Covid-19</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

