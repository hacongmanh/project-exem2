<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V13</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('register/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('register/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('register/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('register/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('register/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<style>
    .back-home {
        position: absolute;
        top: 20px;
        left: 20px;
    }
</style>
<body style="background-color: #999999;">

<div class="limiter">
    <div class="container-login100">
        <a href="/homes" class="back-home"> <img src="https://img.icons8.com/nolan/64/circled-left-2.png"/></a>
        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form method="post" class="login100-form validate-form" action="/registers" name="register">
                @csrf
                <span class="login100-form-title p-b-59">
Sign Up
</span>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="user_name" placeholder="Username...">
                    @if($errors->has('username'))
                        <span class="text-danger">* {{$errors->first('username')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Email...">

                    @if($errors->has('email'))
                        <span class="text-danger">* {{$errors->first('email')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Full name is required">
                    <span class="label-input100">Full Name</span>
                    <input class="input100" type="text" name="full_name" placeholder="Full Name...">

                    @if($errors->has('full_name'))
                        <span class="text-danger">* {{$errors->first('full_name')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <span class="label-input100">Phone</span>
                    <input class="input100" type="text" name="phone" placeholder="Phone...">

                    @if($errors->has('phone'))
                        <span class="text-danger">* {{$errors->first('phone')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Address is required">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" placeholder="Address...">

                    @if($errors->has('address'))
                        <span class="text-danger">* {{$errors->first('address')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="*************">

                    @if($errors->has('password_hash'))
                        <span class="text-danger">* {{$errors->first('password_hash')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                    <span class="label-input100">Repeat Password</span>
                    <input class="input100" type="password" name="repeat_pass" placeholder="*************">

                    @if($errors->has('repeat_pass'))
                        <span class="text-danger">* {{$errors->first('repeat_pass')}}</span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-m w-full p-b-33">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
<span class="txt1">
I agree to the
<a href="#" class="txt2 hov1">
Terms of User
</a>
</span>
                        </label>
                    </div>


                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>

                    <a type="submit" href="/logins" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Sign in
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{asset('register/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('register/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('register/js/main.js')}}"></script>

</body>
</html>
