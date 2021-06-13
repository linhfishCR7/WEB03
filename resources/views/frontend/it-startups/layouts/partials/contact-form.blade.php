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
                                <li><span class="error" ng-show="contactForm.msg_subject.$error.maxlength ">Chủ đề phải <= 50 ký tự</span>
                                </li>

                                <!-- Thông báo lỗi message -->
                                <li><span class="error" ng-show="contactForm.message.$error.required">Vui lòng nhập lời nhắn</span></li>
                                <li><span class="error" ng-show="contactForm.message.$error.minlength">Lời nhắn phải > 6 ký tự</span></li>
                                <li><span class="error" ng-show="contactForm.message.$error.maxlength">Lời nhắn phải <= 250 ký tự</span>
                                </li>
                            </ul>
                        </div>

                        <div class="alert alert-success" ng-show="contactForm.$valid">
                            Thông tin hợp lệ, vui lòng bấm nút <b>"Gửi lời nhắn"</b> để gởi mail đến Quản trị trang web<br />
                            Xin chân thành cám ơn các đóng góp, ý kiến, thắc mắc của Quý Khách hàng.
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" ng-model="name" ng-minlength="6" ng-maxlength="20" ng-required=true data-error="Please enter your name" class="form-control" placeholder="Họ tên của bạn">
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
                                    <textarea name="message" ng-model="message" ng-minlength="6" ng-maxlength="250" ng-required=true cols="30" rows="5" data-error="Write your message" class="form-control" placeholder="Tin nhắn của bạn"></textarea>
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

