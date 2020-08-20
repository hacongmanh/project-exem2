@extends('home.layout.layout')
@section('title' , 'Chúng tôi | Pet sitting')
@section('menu-navbar')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/homes" class="nav-link">Trang chủ</a></li>

        <li class="nav-item"><a href="/timeline" class="nav-link">Dòng thời gian</a></li>
        <li class="nav-item"><a href="/transfer" class="nav-link">Sản Phẩm</a></li>
        <li class="nav-item"><a href="/flow" class="nav-link">Theo dõi</a></li>
        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
        <li class="nav-item "><a href="/about" class="nav-link">Chúng tôi</a></li>
        <li class="nav-item"><a href="/logins" class="nav-link">Đăng nhập</a></li>
    </ul>
@endsection
@section('header')
<style>
    .low {
        visibility: hidden;
    }
</style>
@endsection
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin thanh toán</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <form action="/order" method="post" id="product_form">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label>Full Name</label>
                                            <input name="ship_name" required type="text" class="form-control input-sm" id="ship_name">
                                            @if($errors->has('ship_name'))
                                                <span class="text-danger">* {{$errors->first('ship_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label>Email</label>
                                            <input name="ship_email" required type="email" class="form-control input-sm" id="ship_email">
                                            @if($errors->has('ship_email'))
                                                <span class="text-danger">* {{$errors->first('ship_email')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label>Phone</label>
                                            <input name="ship_phone" required type="text" class="form-control input-sm" id="ship_phone">
                                            @if($errors->has('ship_phone'))
                                                <span class="text-danger">* {{$errors->first('ship_phone')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label>Địa Chỉ</label>
                                            <input name="ship_address" required type="text" class="form-control input-sm" id="address">
                                            @if($errors->has('ship_address'))
                                                <span class="text-danger">* {{$errors->first('ship_address')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label> notes</label>
                                            <input name="notes" required type="text" class="form-control input-sm" id="notes">
                                            @if($errors->has('notes'))
                                                <span class="text-danger">* {{$errors->first('notes')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                    </div>

                            </div>
                            <div class="col-6" >
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $total = 0
                                    @endphp
                                    @foreach($carts  as $id => $cartItem)
                                        @php
                                        $total += $cartItem['price'] *$cartItem['quantity'];
                                        @endphp
                                        <tr >

                                            <td><img src="{{$cartItem['thumbnail']}}" width="100px" alt=""></td>
                                            <td>{{$cartItem['name']}}</td>
                                            <td>{{\App\ConvertPrice::formatMoney($cartItem['price'])}}</td>
                                            <td><a href="javascript:void(0)" class="text-danger remove-item" data-id="{{$cartItem['id']}}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                               <div>
                                  <h4> Tổng tiền : {{\App\ConvertPrice::formatMoney($total)}}</h4>
                               </div>
                               <div style="text-align: center;">
                                   <a href="" class="btn btn-primary">Cập nhật</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                        <input type="hidden" name="total" value="{{$total}}">
    </form>
@endsection
@section('script')
    <script>
        $('.remove-item').click(function (){
            if(confirm('Bạn có chắc chắn xóa khỏi danh sách đặt trước?')){
                $dogId = $(this).attr('data-id');
                $.ajax({
                    'url': '/remove',
                    'method': 'GET',
                    'data':{
                        'id': $dogId,
                    },
                    'success':function (){
                        $.toast({
                            text : ["<div style='font-weight: bold;font-size:13px'>Xóa phòng thành công!</div>"],
                            showHideTransition : 'slide',  // It can be plain, fade or slide
                            hideAfter : 1000,
                            bgColor : 'red',              // Background color for toast
                            textColor : 'white',
                            position : 'bottom-right'
                        })
                        location.reload();
                    },
                    'error':function (){
                        alert('Xóa không thành công! xin vui lòng thực hiện lại hoặc tải lại trang web')
                    }
                })
            }
        })
    </script>
@endsection

