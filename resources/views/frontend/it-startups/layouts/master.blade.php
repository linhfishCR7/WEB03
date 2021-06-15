<!DOCTYPE html>
<html lang="en" ng-app="thuongmaiApp">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/animate.min.css') }}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/fontawesome.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/flaticon.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/owl.carousel.min.css')}}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/magnific-popup.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/nice-select.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/meanmenu.css')}}">
    <!-- Progress Circle Min CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/progresscircle.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('themes/it-startups/assets/css/responsive.css')}}">

    <title>IT Startups | @yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('themes/it-startups/assets/img/favicon.png')}}">

    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
</head>
    <body>
        <!-- Start Preloader Area -->
        @include('frontend.it-startups.layouts.partials.preloader')
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        @include('frontend.it-startups.layouts.partials.navbar')
        <!-- End Navbar Area -->

        <!-- Start Home Area -->
        @yield('main-content')
        <!-- End Home Area -->

        <!-- Start Footer Area -->
        @include('frontend.it-startups.layouts.partials.footer-area')
        <!-- End Footer Area -->
        
        <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>
        
        <!-- jQuery Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/jquery.min.js') }}"></script>
        <!-- Popper Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/bootstrap.min.js') }}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Parallax Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/parallax.min.js') }}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Nice Select Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Mean Menu JS -->
        <script src="{{ asset('themes/it-startups/assets/js/jquery.meanmenu.js') }}"></script>
        <!-- Progress Circle Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/progresscircle.min.js') }}"></script>
        <!-- WOW Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/wow.min.js') }}"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/form-validator.min.js') }}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{ asset('themes/it-startups/assets/js/contact-form-script.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('themes/it-startups/assets/js/main.js') }}"></script>


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
