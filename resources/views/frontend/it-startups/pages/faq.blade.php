@extends('frontend.it-startups.layouts.master')

@section('title')
FAQ
@endsection
@section('class')
evolta-nav navbar-style-two
@endsection
@section('subclass')
container
@endsection
@section('custom-css')
@endsection
@include('frontend.it-startups.layouts.partials.page-title')
@section('main-content')
    <!-- Start FAQ Area -->
    <section class="faq-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="faq-content">
                        <div class="section-title">
                            <div class="content">
                                <span>Ask Question</span>
                                <h2>Frequently Asked Questions</h2>
                                <p>Veniam quis nostrud exercitation ullamco laboris nist aute irure dolor in reprehenderit in voluptate velit esse nulla pariatur excepteur sint occaecat aboris nisi ut aliquip.</p>
                            </div>
                        </div>
                        <div class="faq-image">
                            <img src="{{asset('themes/it-startups/assets/img/faq.png')}}" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    Which material types can you work with?
                                </a>

                                <p class="accordion-content show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>
                            
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    Is Smart Lock required for instant apps?
                                </a>

                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>
                            
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    Can I have multiple activities in a single feature?
                                </a>

                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    Which material types can you work with?
                                </a>

                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>
                            
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    Why Choose Our Services In Your Business?
                                </a>

                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>
                            
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    How To Get Start With Us?
                                </a>

                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fas fa-plus"></i>
                                    Why Choose Our Services In Your Business?
                                </a>

                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="faq-contact">
                <div class="section-title">
                    <div class="content">
                        <span>Message Us</span>
                        <h2>Do You Have Any Questions</h2>
                    </div>
                </div>

                <div class="contact-form">
                    @include('frontend.it-startups.layouts.partials.contact-form')
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->
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

