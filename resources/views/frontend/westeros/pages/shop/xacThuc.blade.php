@extends('frontend.westeros.layouts.master')

@section('title')
Xác thực
@endsection
@section('main')
Home /
@endsection

@section('sub')
Xác thực
@endsection

@section('custom-css')
<style>

</style>
@endsection
@section('main-content')

<!-- REGISTER-LOGIN -->
<div id="register-login-wrap">
    <section id="register-login">
        <div class="featured-form" ng-controller="registerController">
            <h3>New? Register Now!</h3>
            <form class="westeros-form" name="registerForm" ng-submit="submitRegisterForm()" novalidate>
                <!-- Div Thông báo lỗi 
                Chỉ hiển thị khi các validate trong form `registerForm` không hợp lệ => registerForm.$invalid = true
                Sử dụng tiền chỉ lệnh ng-show="registerForm.$invalid"
                -->
                <div class="alert alert-danger" ng-show="registerForm.$invalid">
                    <ul>
                        <!-- Thông báo lỗi kh_email -->
                        <li><span class="error" ng-show="registerForm.kh_email.$error.required">Vui lòng nhập email</span></li>
                        <li><span class="error" ng-show="!registerForm.kh_email.$error.required && registerForm.kh_email.$error.pattern">Chỉ chấp nhập GMAIL, vui lòng kiểm tra lại</span></li>

                        <!-- Thông báo lỗi kh_taiKhoan -->
                        <li><span class="error" ng-show="registerForm.kh_taiKhoan.$error.required">Vui lòng nhập tên tài khoản</span></li>
                        <li><span class="error" ng-show="registerForm.kh_taiKhoan.$error.minlength">Tên tài khoản phải > 6 ký tự</span></li>
                        <li><span class="error" ng-show="registerForm.kh_taiKhoan.$error.maxlength">Tên tài khoản phải <= 50 ký tự</span>
                        </li>
                        <!-- Thông báo lỗi kh_matKhau -->
                        <li><span class="error" ng-show="registerForm.kh_matKhau.$error.required">Vui lòng nhập tên mật khẩu</span></li>
                        <li><span class="error" ng-show="registerForm.kh_matKhau.$error.minlength">Tên mật khẩu phải > 8 ký tự</span></li>
                        <li><span class="error" ng-show="registerForm.kh_matKhau.$error.maxlength">Tên mật khẩu phải <= 20 ký tự</span>
                        </li>
                        <!-- Thông báo lỗi kh_hoTen -->
                        <li><span class="error" ng-show="registerForm.kh_hoTen.$error.required">Vui lòng nhập Họ tên</span></li>
                        <li><span class="error" ng-show="registerForm.kh_hoTen.$error.minlength">Họ tên phải > 6 ký tự</span></li>
                        <li><span class="error" ng-show="registerForm.kh_hoTen.$error.maxlength">Họ tên phải <= 100 ký tự</span>
                        </li> <!-- Thông báo lỗi kh_gioiTinh -->
                        <li><span class="error" ng-show="registerForm.kh_gioiTinh.$error.required">Vui lòng chọn giới tính</span></li>

                        <!-- Thông báo lỗi kh_ngaySinh -->
                        <li><span class="error" ng-show="registerForm.kh_ngaySinh.$error.required">Vui lòng nhập Ngày sinh</span></li>

                        <!-- Thông báo lỗi kh_diaChi -->
                        <li><span class="error" ng-show="registerForm.kh_diaChi.$error.minlength">Địa chỉ phải > 6 ký tự</span></li>
                        <li><span class="error" ng-show="registerForm.kh_diaChi.$error.maxlength">Địa chỉ phải <= 250 ký tự</span>
                        </li> <!-- Thông báo lỗi kh_dienThoai -->
                        <li><span class="error" ng-show="registerForm.kh_dienThoai.$error.minlength">Điện thoại phải > 6 ký tự</span></li>
                        <li><span class="error" ng-show="registerForm.kh_dienThoai.$error.maxlength">Điện thoại phải <= 11 ký tự</span>
                        </li>
                        </li>
                </div>

                <label class="rl-label required" for="kh_taiKhoan">Tài khoản</label>
                <input type="text" id="kh_taiKhoan" name="kh_taiKhoan" ng-model="kh_taiKhoan" ng-minlength="6" ng-maxlength="50" ng-required=true>
                <label class="rl-label required">Your Email Address</label>
                <input type="email" id="kh_email" name="kh_email" class="form-control" ng-model="kh_email" ng-pattern="/^.+@gmail.com$/" ng-required=true>
                <label class="rl-label required my-3">Password</label>
                <input type="password" id="kh_matKhau" name="kh_matKhau" class="form-control" ng-model="kh_matKhau" ng-minlength="8" ng-maxlength="20" ng-required=true>
                <label class="rl-label" for="kh_hoTen">Your Name</label>
                <input type="text" id="kh_hoTen" name="kh_hoTen" ng-model="kh_hoTen" ng-minlength="6" ng-maxlength="100" ng-required=true>
                <label class="rl-label required">Giới tính</label>
                <select name="kh_gioiTinh" id="kh_gioiTinh" class="form-control" ng-model="kh_gioiTinh" ng-required=true>
                    <option value="0">Nữ</option>
                    <option value="1">Nam</option>
                    <option value="2">Khác</option>
                </select>
                <label class="rl-label my-3 required">Ngày sinh</label>
                <input type="text" class="form-control" id="kh_ngaySinh" name="kh_ngaySinh" ng-model="kh_ngaySinh" ng-required=true>
                <label class="rl-label my-3 required">Địa chỉ</label>
                <input type="text" class="form-control" id="kh_diaChi" name="kh_diaChi" ng-model="kh_diaChi" ng-minlength="6" ng-maxlength="250">
                <label class="rl-label my-3 required">Điện thoại</label>
                <input type="text" class="form-control" id="kh_dienThoai" name="kh_dienThoai" ng-model="kh_dienThoai" ng-minlength="6" ng-maxlength="11">
                <!-- Div Thông báo validate hợp lệ 
        Chỉ hiển thị khi các validate trong form `orderForm` không hợp lệ => orderForm.$valid = true
        Sử dụng tiền chỉ lệnh ng-show="orderForm.$valid"
        -->
                <div class="alert alert-success" ng-show="registerForm.$valid">
                    Thông tin hợp lệ, vui lòng bấm nút <b>"Create your account"</b> để tạo TÀI KHOẢN<br />
                    Xin chân thành cám ơn Quý Khách hàng.
                </div>
                <button class="button register " type="submit" ng-disabled="registerForm.$invalid">Create your account</button>
            </form>
        </div>


        			<div class="featured-form">
				<h3>Login To Your Account</h3>
				<form class="westeros-form" action="{{ route('frontend.login') }}" method="POST">
                @csrf
					<label class="rl-label">Your Email Address</label>
					<input type="text" name="kh_email" placeholder="Enter your email address here...">
					<label class="rl-label">Your Password</label>
					<input type="password" name="kh_matKhau" class="form-control" placeholder="Enter your password here...">
					<input type="checkbox" id="remember" name="remember" class="my-3">
					<label for="remember"><span class="checkbox" ><span></span></span>Remember my email and password</label>
					<a href="#" class="fp-msg">Forgot your password? Click here!</a>
					<button class="button login">Sign in Now!</button>
				</form>
			</div>
    </section>
</div>
<!-- /REGISTER-LOGIN -->
<!-- ADVERTISING -->
<div id="advertising-wrap">
    <section id="advertising" class="short">
        <div class="ad-box clearfix">
            <a href="#">
                <img src="{{asset('themes/westeros/images/banners/banner1.png')}}" alt="banner1">
            </a>
            <a href="#">
                <img src="{{asset('themes/westeros/images/banners/banner2.png')}}" alt="banner2">
            </a>
        </div>
    </section>
</div>
<!-- /ADVERTISING -->

<!-- BRANDS -->
<div id="brands-wrap">
    <section id="brands">
        <h3 class="title">Our Brands</h3>
        <div class="slidable">
            <!-- SLIDE CONTROLS -->
            <ul class="slide-controls">
                <!-- LEFT CONTROL -->
                <li>
                    <a href="#" class="button prev">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>
                </li>
                <!-- /LEFT CONTROL -->

                <!-- RIGHT CONTROL -->
                <li>
                    <a href="#" class="button next">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>
                </li>
                <!-- /RIGHT CONTROL -->
            </ul>
            <!-- /SLIDE CONTROLS -->

            <!-- BRANDS LIST -->
            <ul id="owl-brands" class="brands-list owl-carousel">
                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/gr.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/gr-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->

                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/tf.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/tf-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->

                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/aj.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/aj-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->

                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/vh.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/vh-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->

                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/pd.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/pd-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->

                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/gr.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/gr-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->

                <!-- BRAND -->
                <li>
                    <a href="#">
                        <img src="{{asset('themes/westeros/images/brands/tf.png')}}" alt="brand-normal">
                        <img src="{{asset('themes/westeros/images/brands/tf-over.png')}}" alt="brand-over">
                    </a>
                </li>
                <!-- /BRAND -->
            </ul>
            <!-- /BRANDS LIST -->
        </div>
    </section>
</div>
<!-- /BRANDS -->
@endsection
@section('custom-scripts')
<script>
    // Khai báo controller `registerController`
    app.controller('registerController', function($scope, $http, ngCart) {
        $scope.ngCart = ngCart;
        // hàm submit form sau khi đã kiểm tra các ràng buộc (validate)
        $scope.submitRegisterForm = function() {
            // kiểm tra các ràng buộc là hợp lệ, gởi AJAX đến action 
            if ($scope.registerForm.$valid) {
                // lấy data của Form
                var dataInputRegisterForm_KhachHang = {
                    "kh_taiKhoan": $scope.registerForm.kh_taiKhoan.$viewValue
                    , "kh_matKhau": $scope.registerForm.kh_matKhau.$viewValue
                    , "kh_hoTen": $scope.registerForm.kh_hoTen.$viewValue
                    , "kh_gioiTinh": $scope.registerForm.kh_gioiTinh.$viewValue
                    , "kh_email": $scope.registerForm.kh_email.$viewValue
                    , "kh_ngaySinh": $scope.registerForm.kh_ngaySinh.$viewValue
                    , "kh_diaChi": $scope.registerForm.kh_diaChi.$viewValue
                    , "kh_dienThoai": $scope.registerForm.kh_dienThoai.$viewValue
                , };
                var dataInputRegisterForm = {
                    "khachhang": dataInputRegisterForm_KhachHang
                    , "_token": "{{ csrf_token() }}"
                , };
                // sử dụng service $http của AngularJS để gởi request POST đến route `frontend.register`
                $http({
                    url: "{{ route('frontend.register') }}"
                    , method: "POST"
                    , data: JSON.stringify(dataInputRegisterForm)
                }).then(function successCallback(response) {
                    // Đăng ký thành công, thông báo cho khách hàng biết
                    swal.fire('Đăng ký thành công', 'Xin cám ơn Quý khách!', 'success');

                    // Chuyển sang trang Hoàn tất đặt hàng
                    // if (response.data.redirectUrl) {
                    // location.href = response.data.redirectUrl;
                    //}
                }, function errorCallback(response) {
                    // Gởi mail không thành công, thông báo lỗi cho khách hàng biết
                    swal.fire('Email đã tồn tại hoặc có lỗi trong quá trình đăng ký', 'Vui lòng kiểm tra và thử lại sau đó.', 'error');
                    //console.log(response);
                });
            }
        };
    });

</script>

@endsection
