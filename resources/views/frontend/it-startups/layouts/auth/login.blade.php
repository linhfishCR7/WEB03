@extends('frontend.it-startups.layouts.auth.master')

@section('title')
Sign In
@endsection

@section('form')
<span ng-controller="loginController">
   <form name="loginForm" ng-submit="submitLoginForm()" novalidate action="{{ route('frontend.new.login') }}" method="POST">
        @csrf
        <div class="alert alert-danger" ng-show="loginForm.$invalid">
            <ul class="nav flex-column">
                <!-- Thông báo lỗi email -->
                <li><span class="error" ng-show="loginForm.email.$error.required">Vui lòng nhập email</span></li>
                <li><span class="error" ng-show="!loginForm.email.$error.required && loginForm.email.$error.pattern">Chỉ chấp nhập GMAIL, vui lòng kiểm tra lại</span></li>

                <!-- Thông báo lỗi password -->
                <li><span class="error" ng-show="loginForm.password.$error.required">Vui lòng nhập tên mật khẩu</span></li>
                <li><span class="error" ng-show="loginForm.password.$error.minlength">Tên mật khẩu phải > 8 ký tự</span></li>
                <li><span class="error" ng-show="loginForm.password.$error.maxlength">Tên mật khẩu phải <= 20 ký tự</span>
                </li>
            </ul>
        </div>
        <div class="alert alert-success" ng-show="loginForm.$valid">
            Thông tin hợp lệ, vui lòng bấm nút <b>"Login"</b> để đăng nhập
        </div>
        <div class="form-group first">
            <label for="email">Email</label>
            <input type="email" name="email" ng-model="email" ng-pattern="/^.+@gmail.com$/" ng-required=true class="form-control">
            <div class="alert alert-success m-3" ng-show="loginForm.email.$valid">Hợp lệ</div>
        </div>
        <div class="form-group last mb-4">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" ng-model="password" ng-required=true ng-minlength="8" ng-maxlength="20">
            <div class="alert alert-success m-3" ng-show="loginForm.password.$valid">Hợp lệ</div>

        </div>

        <div class="d-flex mb-5 align-items-center">
            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input type="checkbox" checked="checked" />
                <div class="control__indicator"></div>
            </label>
            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
        </div>

        <input type="submit" value="Log In" ng-disabled="loginForm.$invalid" class="btn text-white btn-block btn-primary">

        <span class="d-block text-left my-4 text-muted"> or sign in with</span>

        <div class="social-login">
            <a href="#" class="facebook">
                <span class="icon-facebook mr-3"></span>
            </a>
            <a href="#" class="twitter">
                <span class="icon-twitter mr-3"></span>
            </a>
            <a href="#" class="google">
                <span class="icon-google mr-3"></span>
            </a>
        </div>
    </form>
    <span>

        @endsection
        @section('custom-scripts')
        <script>
            // Khai báo controller `loginController`
            app.controller('loginController', function($scope, $http, ngCart) {
                $scope.ngCart = ngCart;
                
            });

        </script>

        @endsection
