@extends('home.layout.layout')
@section('title' , 'Trang chủ | Dog Lovers')
@section('main-content')
    <div class="hero-wrap js-fullheight"
         style="background-image: url({{asset('home/images/bg_1.jpg')}}); height: 969px; background-position: 50% 170px;"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true" style="height: 969px;">
                <div class="col-md-11 ftco-animate text-center fadeInUp ftco-animated">
                    <h1 class="mb-4">Bạn là người yêu chó bạn muốn lưu trữ kỉ niệm đẹp </h1>
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
                            <h3 class="heading">Câu chuyện của một con chó</h3>
                            <p>Đây là một câu chuyện thật, một bài học cảm động từ một con chó hai chân: Faith.</p>
                            <a href="/blog-home-1" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate fadeInUp ftco-animated">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-dog-eating"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Tìm một con chó</h3>
                            <p>Cuộc đoàn tụcủa cụ bà và chó cưng ở Ha Giang</p>
                            <a href="/blog-home-2" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate fadeInUp ftco-animated">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-grooming"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Nuôi dạy chó</h3>
                            <p>Ít ai nhận ra rằng khi trẻ có một người bạn là thú cưng, chúng sẽ tự học cách chịu trách nhiệm, cải thiện sự tự tin, hòa đồng hơn rất nhiều. Đây là những điều cực kỳ tốt trong quá trình phát triển tính cách ở trẻ.</p>
                            <a href="/blog-home-3" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
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
                    <div
                        class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url({{asset('home/images/maltese_dog_dog_muzzle_suit_117718_1920x1080.jpg')}});">
                        <a href="https://www.youtube.com/watch?v=PSto7bOsKXo"
                           class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="img img-2 mr-md-2"
                             style="background-image:url({{asset('home/images/dog_pet_legs_175229_1920x1080.jpg')}});"></div>
                        <div class="img img-2 ml-md-2"
                             style="background-image:url({{asset('home/images/dog_puppy_funny_164183_1920x1080.jpg')}});"></div>
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
                                    <button href="#collapseOne"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseOne">
                                        <p class="mb-0">Làm thế nào để huấn luyện chó cưng của bạn?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne"
                                 style="">
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
                                    <button href="#collapseTwo"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <p class="mb-0">Những điều cần biết khi mới nuôi chó là gì ?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo"
                                 style="">
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
                                    <button href="#collapseThree"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        <p class="mb-0">Tại sao phải tiêm phòng vacxin cho thú cưng?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Chích ngừa cho chó là việc đưa các kháng thể do con người tạo ra vào trong
                                            cơ thể thú cưng. Điều này làm cho cơ thể vật nuôi của bạn tạo ra kháng thể
                                            để chống lại căn bệnh này. Nếu chúng mắc bệnh tương tự trong tương lai, cơ
                                            thể của họ sẽ nhận ra nó và chống lại nó hiệu quả hơn nhiều.
                                        </li>
                                        <li>Vật nuôi nhỏ có nguy cơ mắc bệnh nghiêm trọng hơn nhiều. Khi vật nuôi nhỏ bị
                                            bệnh, những bệnh này có nhiều khả năng gây tử vong và thậm chí đối với những
                                            vật nuôi may mắn chống lại bệnh, có thể gây ra các vấn đề sức khỏe suốt đời.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingFour" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseFour"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        <p class="mb-0">Làm sao để chăm chó đẻ ?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Vệ sinh ổ đẻ để tránh nhiễm trùng cho chó con.</li>
                                        <li>Vệ sinh cơ thể cho chó con bằng khăn mềm.</li>
                                        <li>Phần cuống rốn của chó con sẽ tự khô lại và rụng đi, người nuôi không nên
                                            can thiệp sẽ khiến chó bị xuất huyết và chảy máu.
                                        </li>
                                        <li>Điều chỉnh nhiệt độ ổ đẻ ở mức nhiệt độ thường.</li>
                                    </ol>
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
                @foreach($home as $list)
                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                        <div class="block-7">
                            @foreach($list->large_photos as $photo )
                                <div class="img" style=" background-image: url({{$photo}}); "></div>
                            @endforeach
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div>{{$list->birthday}} &nbsp; <a href="*">&nbsp;Tên: {{$list->name}}</a></div>
                                    <li>Màu sắc :{{$list->color}}</li>
                                    <li>Sinh nhật :{{$list->birthday}}</li>
                                    <div style="font-size: 50px; !important;" class="price">
                                        <div class="number">{{$list->price_format}}</div>
                                    </div>
                                    <a href="/timeline/{{$list->id}}" class="btn btn-success">Chi Tiết</a>
                                    <a href="#"
                                       data-url="{{route('addToCart',['id'=>$list->id])}}"
                                       class="btn btn-primary add_to_cart">
                                        Add to card
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach($timelines as $timeline)
                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                        <div class="work mb-4 img d-flex align-items-end"
                             style="background-image: url({{$timeline->large_photo}});">
                            <a href="{{$timeline->large_photo}}"
                               class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                            <div class="desc w-100 px-4">
                                <div class="text w-100 mb-3">
                                    <span>{{$timeline->type}}</span>
                                    <h2><a href="work-single.html">{{$timeline->dog->name}}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach($article as $article_new)
                    <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="blog-entry align-self-stretch">
                            <a href="/blog/{{$article_new->id}}" class="block-20 rounded"
                               style="background-image: url({{$article_new->large_photo}});">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><a href="#">{{$article_new->updated_at}}</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="/blog/{{$article_new->id}}">{{$article_new->title}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function addToCart(event) {
            event.preventDefault();
            let urlCart = $(this).data('url');
            $.ajax({
                type:"GET",
                url:urlCart,
                dataType:'json',
                success:function (data) {
                    if(data.code === 200){
                        alert('thêm sản phẩm thành công');
                    }
                },
                error:function () {

                }
            });
        }

        $(function () {
            $('.add_to_cart').on('click', addToCart)
        })


    </script>



@endsection
