@extends('home.layout.layout')
@section('title' , 'Dòng Thời Gian | Dog Lovers')

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
    <section class="ftco-section">
        <div class="container">
            @foreach($timeline as $timelines)
            <div class="row">
                <div class="col-2"></div>
                <div class="col-md-8 ftco-animate">
                    <div><h2><a href="work-single.html">Persian Cat</a> ' </h2> </div>
                    <h5><span>dec</span></h5>
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{$timelines->large_photo}}); height:490px ">
                        <a href="images/gallery-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center"><span class="fa fa-expand"></span></a>
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-sm-12 col-md-5"></div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers">
                            {{$timeline->links()}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
