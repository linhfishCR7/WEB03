<!doctype html>
<html lang="en" ng-app="thuongmaiApp">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('themes/login-form-08/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('themes/login-form-08/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('themes/login-form-08/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('themes/login-form-08/css/style.css')}}">

    <title>It-startups | @yield('title')</title>
</head>
<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('themes/login-form-08/images/undraw_file_sync_ot38.svg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>@yield('title') to <strong>It-startups</strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                            </div>
                            @yield('form')
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('themes/login-form-08/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('themes/login-form-08/js/popper.min.js')}}"></script>
    <script src="{{ asset('themes/login-form-08/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('themes/login-form-08/js/main.js')}}"></script>
    <!-- Sweetalert -->
    <script src="{{ asset('vendor/sweetalert2/sweetalert.js') }}"></script>
    <!-- Include AngularJS -->
    <script src="{{ asset('vendor/angularjs/angular.min.js') }}"></script>
    <!-- Include thư viện quản lý Cart - AngularJS -->
    <script src="{{ asset('vendor/ngCart/dist/ngCart.js') }}"></script>

    <script>
        // Khởi tạo ứng dụng AngularJS, sử dụng plugin ngCart
        // Do Laravel và AngularJS đều sử dụng dấu `Double bracket` để render dữ liệu
        // => để tránh bị xung đột cú pháp, ta sẽ đổi cú pháp render dữ liệu của AngularJS thành <% %>
        var app = angular.module('thuongmaiApp', ['ngCart']
            , function($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });

    </script>
    @yield('custom-scripts')
</body>
</html>
