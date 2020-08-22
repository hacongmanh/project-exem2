@extends('home.layout.layout')
@section('title' , 'Dòng Thời Gian |Dog Lovers')

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
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{$timelines->large_photo}});">
                        <a href="{{$timelines->large_photo}}" class="icon image-popup d-flex justify-content-center align-items-center"><span class="fa fa-expand"></span></a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="/timeline/{{$timelines->thumbnail_by}}">{{$timelines->thumbnail_by}}</a></h2>
                            </div>
                        </div>
                 </div>
            </div>
            <div class="col-md-8">
                <h2>{{$timelines->title}}</h2>
                <h5><span>{{$timelines->description}}</span></h5>
                <div><span>{{$timelines->updated_at}}</span></div>
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
