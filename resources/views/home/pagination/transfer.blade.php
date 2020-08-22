@extends('home.layout.layout')
@section('title' , 'Sản Phẩm | Dog Lovers')
@section('menu-navbar')
@section('header')
    <style>
        .block-7 .price .number {
            font-size: 20px;
            ext-decoration: underline;
        }
    </style>
@endsection
@section('main-content')
@endsection
@section('section')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2>Sản Phẩm Của Cửa Hàng </h2>
                </div>
            </div>
            <div class="row">
                @foreach($transfer as $transfer_1)
                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                        <div class="block-7">
                            @foreach($transfer_1->large_photos as $photo )
                                <div class="img" style=" background-image: url({{$photo}}); "></div>
                            @endforeach
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div>{{$transfer_1->birthday}} &nbsp; &nbsp;Tên: {{$transfer_1->name}}</div>
                                    <div style="font-size: 50px; !important;" class="price">
                                        <div class="number">{{$transfer_1->price_format}}</div>
                                    </div>
                                    <li>Màu sắc :{{$transfer_1->color}}</li>
                                    <li>Sinh nhật :{{$transfer_1->birthday}}</li>
                                    {{--                                        <a href="/dogs"><button style="text-align: center" type="button"  class="" >Chi tiết</button></a>--}}
                                    <a href="/timeline/{{$transfer_1->id}}" class="btn btn-success">Chi Tiết</a>
                                    <a href="#"
                                       data-url="{{route('addToCart',['id'=>$transfer_1->id])}}"
                                       class="btn btn-primary add_to_cart">
                                        Add to card
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-5"></div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers">
                        {{$transfer->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
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


