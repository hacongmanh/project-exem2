@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Dog Lovers')
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
    <section class="ftco-section testimony-section" style="background-image: url({{asset('home/images/thumb-1920-884661_ygyelp.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Chó không phải là toàn bộ cuộc sống của Tôi, nhưng chúng khiến cuộc sống của Tôi trở nên toàn vẹn.</p><br>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('home/images/102456998_1426034140933872_6112381375411431659_n.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Hà Công Mạnh</p>
                                            <span class="position">Leader</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Chính những chú chó đã dậy cho Tôi biết thế nào là tình yêu vô điều kiện. Và điều đó làm cho Tôi thấy cuộc sống hẳn không quá là tồi tệ...</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('home/images/101894916_2535236766729612_7223070116718139435_o.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Trần Thanh Phong</p>
                                            <span class="position">Thành Viên</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Khi Tôi quyết định nuôi một chú chó thì Tôi cũng phải sẵn sàng chấp nhận nỗi đâu khi mất đi chúng</p><br>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('home/images/A8873CB8-69E7-49CD-BBDD-F163D10D6020.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Trịnh Hoàng Hiếu</p>
                                            <span class="position">Thành Viên</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Tôi nhận ra rằng mỗi khi Tôi mất một chú chó, nó mang đi theo một mảnh tim Tôi, và mỗi chú chó mới đến với Tôi lại tặng Tôi một mảnh tim mình. </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('home/images/501208E3-8D49-4E08-BDA7-84F1DFB76EDD.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Nguyễn Đức Quân</p>
                                            <span class="position">Thành Viên</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
