<!doctype html>
<html lang="en" ng-app="thuongmai">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('themes/Minton_green/assets/images/favicon.ico') }}">
    <!-- third party css -->
    <link href="{{ asset('themes/Minton_green/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/Minton_green/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/Minton_green/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/Minton_green/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->
    <!-- Plugins css -->
    <link href="{{ asset('themes/Minton_green/assets/libs/x-editable/bootstrap-editable.css')}}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('themes/Minton_green/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/Minton_green/assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/Minton_green/assets/css/app.min.css') }}">

    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}

    <title>LINHFISH | @yield('title')</title>

    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('backend.layouts.partials.topbar-navbar')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layouts.partials.left-sidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">LINHFISH</a></li>
                                        <li class="breadcrumb-item active">@yield('feature-title')</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">@yield('feature-description')</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @include('backend.layouts.partials.error-message')
                    @include('backend.layouts.partials.flash-message')
                    @yield('content')
                    <!-- Footer Start -->
                    @include('backend.layouts.partials.footer')

                    <!-- end Footer -->
                </div> <!-- container -->

            </div> <!-- content -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    @include('backend.layouts.partials.right-sidebar')
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    @include('backend.layouts.partials.rightbar-overlay')

    <!-- Vendor js -->
    <script src="{{ asset('themes/Minton_green/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/peity/jquery.peity.min.js') }}"></script>
    <!-- Sparkline charts -->
    <script src="{{ asset('themes/Minton_green/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <!-- Plugins js -->
    <script src="{{ asset('themes/Minton_green/assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ asset('themes/Minton_green/assets/libs/x-editable/bootstrap-editable.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('themes/Minton_green/assets/js/pages/form-xeditable.init.js')}}"></script>
    <!-- init js -->
    <script src="{{ asset('themes/Minton_green/assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('themes/Minton_green/assets/js/app.min.js') }}"></script>

    <!-- Optional JavaScript -->
    <script src="{{ asset('vendor/sweetalert2/sweetalert.js') }}"></script>

    <!-- Include AngularJS -->
    <script src="{{ asset('vendor/angularjs/angular.min.js') }}"></script>
    <!-- Include thư viện quản lý Cart - AngularJS -->
    <script src="{{ asset('vendor/ngCart/dist/ngCart.js') }}"></script>

    <script>
        // Khởi tạo ứng dụng AngularJS, sử dụng plugin ngCart
        // Do Laravel và AngularJS đều sử dụng dấu `Double bracket` để render dữ liệu
        // => để tránh bị xung đột cú pháp, ta sẽ đổi cú pháp render dữ liệu của AngularJS thành <% %>
        var app = angular.module('thuongmai', ['ngCart']
            , function($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });
            
        app.controller('mainController', function ($scope) {
            // hàm submit form sau khi đã kiểm tra các ràng buộc (validate)
            $scope.submitForm = function () {

                // kiểm tra các ràng buộc là hợp lệ
                if ($scope.frmCreate.$valid) {
                    alert('Hợp lệ, dữ liệu đã được gởi đăng ký.');
                }
            };
        });

    </script>
    <!-- Các custom script dành riêng cho từng view -->
    @yield('custom-scripts')
</body>
</html>
