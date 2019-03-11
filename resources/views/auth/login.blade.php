@extends('layouts.app')

@section('title','Login')

@section('content')
</div>
</div>
<!-- login Start-->
<div class="login-form-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"></div>
            <form method="POST" action="{{ route('login') }}" id="adminpro-form" class="adminpro-form">
                @csrf
                <div class="col-lg-4">
                    <div class="login-bg">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                    <a href="#"><img style="width: 80px;" src="{{ asset('backend/img/logo/logo2.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-title">
                                    <h1 style="color: #fff !important;">Login Form</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p style="color: #fff !important;">E-mail</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="email" name="email" />
                                    <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="login-input-head">
                                    <p style="color: #fff !important;">Password</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="login-input-area">
                                    <input type="password" name="password" />
                                    <i class="fa fa-lock login-user"></i>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="forgot-password">
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="login-keep-me">
                                            <label class="checkbox">
                                                <input type="checkbox" name="remember" checked><i></i>Keep me logged in
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-8">
                                <div class="login-button-pro">
                                    <button type="submit" class="login-button login-button-lg">Log in</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
<!-- login End-->

@endsection


