@extends('frontend.layouts.master')

@section('title')
Contact
@endsection
@section('main')
Home /
@endsection

@section('sub')
Contact
@endsection

@section('custom-css')
@endsection
@section('main-content')
<!-- CONTACT -->
<div id="contact-wrap">
    <section id="contact" ng-controller="contactController">
        <!-- CONTACT FORM -->
        <div class="contact-form">
            <h3 class="title">{{ __('eCommerce.contact') }}</h3>
            <!-- CONTACT DETAILS -->
            <div class="contact-details">
                <p>Lorem ipsum dolor sit amet, consectetur er adipisicing elit, sed do eiusmod eru. Lorem ipsum dolor sit amet, consectetur.</p>
                <!-- CONTACT INFO -->
                <ul class="contact-info">
                    <li class="address">
                        <!-- SVG PIN -->
                        <svg class="svg-pin">
                            <use xlink:href="#svg-pin"></use>
                        </svg>
                        <!-- /SVG PIN -->
                        <p>3/2, Hung Loi, Ninh Kieu, Can Tho</p>
                    </li>
                    <li class="phone">
                        <!-- SVG PHONE -->
                        <svg class="svg-phone">
                            <use xlink:href="#svg-phone"></use>
                        </svg>
                        <!-- /SVG PHONE -->
                        <p>(+84) 3428 78767</p>
                    </li>
                    <li class="email">
                        <!-- SVG ENVELOPE -->
                        <svg class="svg-envelope">
                            <use xlink:href="#svg-envelope"></use>
                        </svg>
                        <!-- /SVG ENVELOPE -->
                        <p><a href="mailto:linhfish10c1@gmail.com">linhfish10c1@gmail.com</a></p>
                    </li>
                </ul>
                <!-- /CONTACT INFO -->
                <h5>{{ __('eCommerce.connect-with-us') }}</h5>
                <!-- SOCIAL LINKS -->
                <ul class="social-links">
                    <li class="fb"><a href="https://www.facebook.com/HaVanLinh1904/" target="_blank"></a></li>
                    <li class="twt"><a href="https://twitter.com/LINHFISH6" target="_blank"></a></li>
                    <li class="gplus"><a href="#" target="_blank"></a></li>
                    <li class="db"><a href="#" target="_blank"></a></li>
                    <li class="rss"><a href="#" target="_blank"></a></li>
                    <li class="vm"><a href="#" target="_blank"></a></li>
                </ul>
                <!-- /SOCIAL LINKS -->
            </div>
            <!-- /CONTACT DETAILS -->
            <div class="featured-form">
                <form class="westeros-form" name="contactForm" id="contactForm" ng-submit="submitContactForm()" novalidate>
                    <!-- Div Thông báo lỗi 
            Chỉ hiển thị khi các validate trong form `contactForm` không hợp lệ => contactForm.$invalid = true
            Sử dụng tiền chỉ lệnh ng-show="contactForm.$invalid"
            -->
                    <div class="alert alert-danger" ng-show="contactForm.$invalid">
                        <ul>
                            <!-- Thông báo lỗi name -->
                            <li><span class="error" ng-show="contactForm.name.$error.required">Vui lòng nhập tên</span></li>
                            <li><span class="error" ng-show="contactForm.name.$error.minlength">Tên phải > 6 ký tự</span></li>
                            <li><span class="error" ng-show="contactForm.name.$error.maxlength">Tên phải <= 20 ký tự</span>
                                        <!-- Thông báo lỗi email -->
                            <li><span class="error" ng-show="contactForm.email.$error.required">Vui lòng nhập email</span></li>
                            <li><span class="error" ng-show="!contactForm.email.$error.required && contactForm.email.$error.pattern">Chỉ chấp nhập GMAIL, vui lòng kiểm tra lại</span></li>

                            <!-- Thông báo lỗi message -->
                            <li><span class="error" ng-show="contactForm.message.$error.required">Vui lòng nhập lời nhắn</span></li>
                            <li><span class="error" ng-show="contactForm.message.$error.minlength">Lời nhắn phải > 6 ký tự</span></li>
                            <li><span class="error" ng-show="contactForm.message.$error.maxlength">Lời nhắn phải <= 250 ký tự</span>
                            </li>
                            </li>
                    </div>
                    <!-- Div Thông báo validate hợp lệ Chỉ hiển thị khi các validate trong form `contactForm` không hợp lệ=> contactForm.$valid = true
                                        Sử dụng tiền chỉ lệnh ng-show="contactForm.$valid"
                                        -->
                    <div class="alert alert-success" ng-show="contactForm.$valid">
                        Thông tin hợp lệ, vui lòng bấm nút <b>"Gởi lời nhắn"</b> để gởi mail đến Quản trị trang web<br />
                        Xin chân thành cám ơn các đóng góp, ý kiến, thắc mắc của Quý Khách hàng.
                    </div>

                    <label class="rl-label required">Your Name</label>
                    <input type="text" placeholder="Enter your full name here..." name="name" ng-model="name" ng-minlength="6" ng-maxlength="20" ng-required=true>
                    <div class="alert alert-success" ng-show="contactForm.name.$valid">Hợp lệ</div>

                    <label class="rl-label required">Your Email</label>
                    <input type="text" placeholder="Enter your email address here..." name="email" ng-model="email" ng-pattern="/^.+@gmail.com$/" ng-required=true>
                    <div class="alert alert-success" ng-show="contactForm.email.$valid">Hợp lệ</div>

                    <label class="rl-label required">Your Message</label>
                    <textarea placeholder="Write your message here..." name="message" ng-model="message" ng-minlength="6" ng-maxlength="250" ng-required=true></textarea>

                    <button class="button" ng-disabled="contactForm.$invalid">Send Your Message</button>
                </form>
            </div>
        </div>
        <!-- /CONTACT FORM -->
    </section>
</div>
<!-- /CONTACT -->

<!--MAP-->
<section id="map"></section>
<!--/MAP-->
@endsection
@section('custom-scripts')
<script>
    // Khai báo controller `contactController`
    app.controller('contactController', function($scope, $http) {
        // hàm submit form sau khi đã kiểm tra các ràng buộc (validate)
        $scope.submitContactForm = function() {
            // kiểm tra các ràng buộc là hợp lệ, gởi AJAX đến action 
            if ($scope.contactForm.$valid) {
                // lấy data của Form
                var dataInputContactForm = {
                    "name": $scope.contactForm.name.$viewValue
                    ,"email": $scope.contactForm.email.$viewValue
                    , "message": $scope.contactForm.message.$viewValue
                    , "_token": "{{ csrf_token() }}"
                , };

                // sử dụng service $http của AngularJS để gởi request POST đến route `frontend.contact.sendMailContactForm`
                $http({
                    url: "{{ route('frontend.pages.contact.sendMail') }}"
                    , method: "POST"
                    , data: JSON.stringify(dataInputContactForm)
                }).then(function successCallback(response) {
                    // Gởi mail thành công, thông báo cho khách hàng biết
                    Swal.fire('Gởi mail thành công!', 'Chúng tôi sẽ trả lời Quý khách trong thời gian sớm nhất. Xin cám ơn!', 'success');

                }, function errorCallback(response) {
                    // Gởi mail không thành công, thông báo lỗi cho khách hàng biết
                    Swal.fire('Có lỗi trong quá trình gởi mail!', 'Vui lòng thử lại sau vài phút.', 'error');
                    console.log(response);
                });
            }
        };
    });

</script>
@endsection
