@extends('frontend.it-startups.layouts.master')

@section('title')
Team
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
        <!-- Start Team Area -->
        <section class="team-area ptb-110">
            <div class="container">
                <div class="section-title">
                    <div class="content">
                        <span>Our Experts</span>
                        <h2>Meet Our Leadership Preparing For Your Success</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="image">
                        <img src="{{asset('themes/it-startups/assets/img/section-title/4.png') }}" alt="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/1.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>James Anderson</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/2.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Sarah Taylor</h3>
                                <span>Marketing Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/3.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Joe Root</h3>
                                <span>Lead Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/4.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Daisy Lucy</h3>
                                <span>Lead Designer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/5.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Rowdy Jong</h3>
                                <span>Support</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/6.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Sofia Layla</h3>
                                <span>Marketing Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/7.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Jimmy Warner</h3>
                                <span>Lead Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{asset('themes/it-startups/assets/img/team/8.jpg') }}" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>Emma Daisy</h3>
                                <span>Lead Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape13"><img src="{{asset('themes/it-startups/assets/img/shape\13.svg') }}" alt="image"></div>
            <div class="shape14"><img src="{{asset('themes/it-startups/assets/img/shape\13.svg') }}" alt="image"></div>
        </section>
        <!-- End Team Area -->
@endsection
@section('custom-scripts')

@endsection
