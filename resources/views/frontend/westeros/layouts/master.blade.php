<!DOCTYPE html>
<html lang="en" ng-app="thuongmaiApp">

<head>
    <title>eCommerce | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('themes/westeros/images/favicon.ico') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/westeros/css/vendor/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/westeros/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/westeros/css/style.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Các custom style của frontend -->
    <link rel="stylesheet" href="{{ asset('themes/westeros/css/custom-styles.css') }}">

    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
</head>

<body class="animsition">

    <!-- Header -->
    @include('frontend.westeros.layouts.partials.header')

    <!-- mobile-menu-cover -->
    @include('frontend.westeros.layouts.partials.mobile-menu-cover')

    <!-- mobile-menu -->
    @include('frontend.westeros.layouts.partials.mobile-menu')

    <!-- main-menu -->
    @include('frontend.westeros.layouts.partials.main-menu')

    <!-- SECTION-NAV -->
    <div id="section-nav-wrap">
        <section id="section-nav">
            <p>@yield('main')
                <a href="">@yield('sub')</a></p>
        </section>
    </div>

    <!-- SECTION-NAV -->

    <!-- Content -->
    @yield('main-content')
    @include('frontend.westeros.layouts.partials.flash-message')

    <!-- Footer -->
    @include('frontend.westeros.layouts.partials.footer')

    <!-- Back to top -->
    {{-- <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div> --}}
    <!-- jQuery -->
    <script src="{{ asset('themes/westeros/js/vendor/jquery-1.11.1.min.js') }}"></script>

    <!-- XM Accordion -->
    <script src="{{ asset('themes/westeros/js/vendor/jquery.xmaccordion.min.js') }}"></script>
    <!-- Owl Carrousel -->
    <script src="{{ asset('themes/westeros/js/vendor/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('themes/westeros/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- imgLiquid -->
    <script src="{{ asset('themes/westeros/js/vendor/imgLiquid-min.js') }}"></script>
    <!-- JRange -->
    <script src="{{ asset('themes/westeros/js/vendor/jquery.range.min.js')}}"></script>
    <!-- Liquid -->
    <script src="{{ asset('themes/westeros/js/liquid.js') }}"></script>

    <!-- Header -->
    <script src="{{ asset('themes/westeros/js/header.js') }}"></script>
    <!-- Menu -->
    <script src="{{ asset('themes/westeros/js/menu.js') }}"></script>
    <!-- Home -->
    <script src="{{ asset('themes/westeros/js/home.js') }}"></script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Google Maps Config -->
    <script src="{{ asset('themes/westeros/js/gmaps.js') }}"></script>
    <!-- Blog -->
    <script src="{{ asset('themes/westeros/js/blog.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
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



    <!-- Các custom script dành riêng cho từng view -->
    @yield('custom-scripts')

</body>

</html>
