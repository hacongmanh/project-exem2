@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>
        <li class="nav-item "><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Sản Phẩm</a></li>
        <li class="nav-item"><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="/logins" class="nav-link">Đăng nhập</a></li>
    </ul>
@endsection
@section('main-content')
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Thông tin thanh toán</h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6">--}}
{{--                                <form action="/admin/accounts" method="post" id="product_form">--}}
{{--                                    @csrf--}}
{{--                                    <div class="row form-group">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label>Full Name</label>--}}
{{--                                            <input name="ship_name" type="text" class="form-control input-sm" id="ship_name">--}}
{{--                                            @if($errors->has('ship_name'))--}}
{{--                                                <span class="text-danger">* {{$errors->first('ship_name')}}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row form-group">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label>Email</label>--}}
{{--                                            <input name="ship_email" type="email" class="form-control input-sm" id="ship_email">--}}
{{--                                            @if($errors->has('ship_email'))--}}
{{--                                                <span class="text-danger">* {{$errors->first('ship_email')}}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row form-group">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label>Full Name</label>--}}
{{--                                            <input name="ship_phone" type="text" class="form-control input-sm" id="ship_phone">--}}
{{--                                            @if($errors->has('ship_phone'))--}}
{{--                                                <span class="text-danger">* {{$errors->first('ship_phone')}}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row form-group">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label>Phone</label>--}}
{{--                                            <input name="phone" type="text" class="form-control input-sm" id="phone">--}}
{{--                                            @if($errors->has('phone'))--}}
{{--                                                <span class="text-danger">* {{$errors->first('phone')}}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row form-group">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label>Địa Chỉ</label>--}}
{{--                                            <input name="address" type="text" class="form-control input-sm" id="address">--}}
{{--                                            @if($errors->has('ship_address'))--}}
{{--                                                <span class="text-danger">* {{$errors->first('ship_address')}}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row form-group">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <label>Địa Chỉ</label>--}}
{{--                                            <input name="total" type="text" class="form-control input-sm" id="total">--}}
{{--                                            @if($errors->has('total'))--}}
{{--                                                <span class="text-danger">* {{$errors->first('total')}}</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <button class="btn btn-primary" type="submit">Submit</button>--}}
{{--                                        <button class="btn btn-danger" type="reset">Reset</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="col-6">--}}
{{--                                <img src="" alt="">--}}
{{--                                <div>tets</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
