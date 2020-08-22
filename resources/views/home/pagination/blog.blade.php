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
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                @foreach($article as $list)
                    <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="blog-entry align-self-stretch">
                            <a href="/blog/{{$list->id}}" class="block-20 rounded"
                               style="background-image: url({{$list->large_photo}});">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-2">
                                    <div><a href="#">{{$list->updated_at}}</a></div>
                                </div>
                                <h3 class="heading"><a href="/blog/{{$list->id}}">{{$list->title}}</a></h3>
                            </div>
                        </div>
                    </div>
        @endforeach
    </section>
    <div class="row">
        <div class="col-sm-12 col-md-5"></div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers">
                {{$article->links()}}
            </div>
        </div>
    </div>
    </div>

@endsection
