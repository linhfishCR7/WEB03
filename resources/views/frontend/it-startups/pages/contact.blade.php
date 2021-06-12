@extends('frontend.it-startups.layouts.master')

@section('title')
Contact
@endsection
@section('custom-css')
@endsection
@include('frontend.it-startups.layouts.partials.page-title')
@section('main-content')
<!-- Start Contact Area -->
<section class="contact-area ptb-110" ng-controller="contactController">
    <div class="container">
        <div class="section-title">
            <div class="content">
                <span>Send Message</span>
                <h2>Drop us message for any query</h2>
                <p>If you have an idea, we would love to hear about it.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Address</span>
                            43, Binh Phu 1, Phu Binh, Phu Tan, An Giang
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                            <a href="mailto:havanlinh19042000@email.com">havanlinh19042000@email.com</a>
                            <a href="mailto:linhfish10c1@gmail.com">linhfish10c1@email.com</a>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Phone</span>
                            <a href="#">+84 342 878767</a>
                            <a href="#">+84 342 878767</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <form name="contactForm" id="contactForm" ng-submit="submitContactForm()" novalidate>
                        <div class="alert alert-danger" ng-show="contactForm.$invalid">
                            <ul class="nav flex-column">
                                <!-- Thông báo lỗi name -->
                                <li><span class="error" ng-show="contactForm.name.$error.required">Vui lòng nhập họ tên</span></li>
                                <li><span class="error" ng-show="contactForm.name.$error.minlength">Tên phải > 6 ký tự</span></li>
                                <li><span class="error" ng-show="contactForm.name.$error.maxlength">Tên phải <= 20 ký tự</span>
                                <!-- Thông báo lỗi email -->
                                <li><span class="error" ng-show="contactForm.email.$error.required">Vui lòng nhập email</span></li>
                                <li><span class="error" ng-show="!contactForm.email.$error.required && contactForm.email.$error.pattern">Chỉ chấp nhập GMAIL, vui lòng kiểm tra lại</span></li>
                                <!-- Thông báo lỗi phone_number -->
                                <li><span class="error" ng-show="contactForm.phone_number.$error.required">Vui lòng nhập số điện thoại</span></li>
                                <!-- Thông báo lỗi msg_subject -->
                                <li><span class="error" ng-show="contactForm.msg_subject.$error.required">Vui lòng nhập chủ đề</span></li>
                                <li><span class="error" ng-show="contactForm.msg_subject.$error.minlength ">Chỉ đề phải > 4 ký tự</span></li>
                                <li><span class="error" ng-show="contactForm.msg_subject.$error.maxlength ">Chủ đề phải <= 50 ký tự</span></li>
                                
                                <!-- Thông báo lỗi message -->
                                <li><span class="error" ng-show="contactForm.message.$error.required">Vui lòng nhập lời nhắn</span></li>
                                <li><span class="error" ng-show="contactForm.message.$error.minlength">Lời nhắn phải > 6 ký tự</span></li>
                                <li><span class="error" ng-show="contactForm.message.$error.maxlength">Lời nhắn phải <= 250 ký tự</span></li>
                            </ul>
                        </div>

                        <div class="alert alert-success" ng-show="contactForm.$valid">
                            Thông tin hợp lệ, vui lòng bấm nút <b>"Gửi lời nhắn"</b> để gởi mail đến Quản trị trang web<br />
                            Xin chân thành cám ơn các đóng góp, ý kiến, thắc mắc của Quý Khách hàng.
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name"ng-model="name" ng-minlength="6" ng-maxlength="20" ng-required=true data-error="Please enter your name" class="form-control" placeholder="Họ tên của bạn">
                                    <div class="help-block with-errors"></div>
                                    <div class="alert alert-success m-3" ng-show="contactForm.name.$valid">Hợp lệ</div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" ng-model="email" ng-pattern="/^.+@gmail.com$/" ng-required=true data-error="Please enter your email" class="form-control" placeholder="Email của bạn">
                                    <div class="help-block with-errors"></div>
                                    <div class="alert alert-success m-3" ng-show="contactForm.email.$valid">Hợp lệ</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" ng-model="phone_number" ng-required=true data-error="Please enter your number" class="form-control" placeholder="Số điện thoại của bạn">
                                    <div class="help-block with-errors"></div>
                                    <div class="alert alert-success m-3" ng-show="contactForm.phone_number.$valid">Hợp lệ</div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" ng-model="msg_subject" ng-minlength="4" ng-maxlength="50" ng-required=true data-error="Please enter your subject" class="form-control" placeholder="Chủ đề của bạn">
                                    <div class="help-block with-errors"></div>
                                    <div class="alert alert-success m-3" ng-show="contactForm.msg_subject.$valid">Hợp lệ</div>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" ng-model="message" ng-minlength="6" ng-maxlength="250" ng-required=true cols="30" rows="5"  data-error="Write your message" class="form-control" placeholder="Tin nhắn của bạn"></textarea>
                                    <div class="help-block with-errors"></div>
                                    <div class="alert alert-success m-3" ng-show="contactForm.message.$valid">Hợp lệ</div>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Gửi lời nhắn</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="{{ asset('themes/it-startups/assets/img/bg-map.png')}}" alt="image"></div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62744.68393499175!2d105.2019876235941!3d10.614878412337163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a3d44a9f8a421%3A0xfdc8d83796adc98e!2zUGjDuiBCw6xuaCwgUGjDuiBUw6JuIERpc3RyaWN0LCBBbiBHaWFuZyBQcm92aW5jZSwgVmlldG5hbQ!5e0!3m2!1sen!2sbd!4v1623479814717!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->
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
                    , "phone_number": $scope.contactForm.phone_number.$viewValue
                    , "msg_subject": $scope.contactForm.msg_subject.$viewValue
                    , "_token": "{{ csrf_token() }}"
                , };
                // sử dụng service $http của AngularJS để gởi request POST đến route `frontend.contact.sendMailContactForm`
                $http({
                    url: "{{ route('frontend.pages.contact.new.sendMail') }}"
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
