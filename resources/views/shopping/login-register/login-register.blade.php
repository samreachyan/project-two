@extends('shopping.master.master')
@section('title', 'Login Register - Man Woman Clothes')


@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/index.html">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="/login-client" method="POST" >
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" name="email" placeholder="Email Address" value="{{ old('email')}}">
                                {{ showError($errors, 'email') }}
                            </div>
                            <div class="col-12 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" name="password" placeholder="Password">
                                {{ showError($errors, 'password') }}
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="#"> Forgotten pasward?</a>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="register-button mt-0">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="/register-client" method="POST">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <label>User Full name*</label>
                                <input class="mb-0" type="text" name="reg-name" placeholder="User Full Name" value="{{old('reg-name')}}">
                                {{ showError($errors, 'reg-name') }}
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Address*</label>
                                <input class="mb-0" type="text" name="reg-address" placeholder="Address" value="{{old('reg-address')}}">
                                {{ showError($errors, 'reg-address') }}
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Phone*</label>
                                <input class="mb-0" type="phone" name="reg-phone" placeholder="012345678" value="{{old('reg-phone')}}">
                                {{ showError($errors, 'reg-phone') }}
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" name="reg-email" placeholder="Email Address" value="{{old('reg-email')}}">
                                {{ showError($errors, 'reg-email') }}
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" name="reg-password" placeholder="Password">
                                {{ showError($errors, 'reg-password') }}
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Confirm Password</label>
                                <input class="mb-0" type="password" name="reg-re-password" placeholder="Confirm Password">
                                {{ showError($errors, 'reg-re-password') }}
                            </div>
                            <div class="col-12">
                                <button type="submit" class="register-button mt-0">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection