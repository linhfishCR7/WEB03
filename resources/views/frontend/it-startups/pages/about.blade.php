@extends('frontend.it-startups.layouts.master')

@section('title')
About Us
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
        <!-- Start About Area -->
        <section class="about-area ptb-110">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{asset('themes/it-startups/assets/img/about-img1.jpg') }}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span>About Us</span>
                            <h2>We've Been Thriving in 37 Years The Tech Area</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra.</p>
                            <p>Business-to-business metrics analytics value proposition funding angel investor entrepreneur alpha ramen equity gamification. Social proof partner network research.</p>
                            <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
                        </div>
                    </div>
                </div>

                <div class="about-inner-area">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="about-text">
								<h3>Our History</h3>
								<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="about-text">
								<h3>Our Mission</h3>
								<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="about-text">
								<h3>Who we are</h3>
								<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start FunFacts Area -->
        <section class="funfacts-area ptb-110 bg-f2feee">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-3 col-sm-4">
                        <div class="single-funfacts">
                            <div class="circlechart" data-percentage="60"></div>
                            <span>Design</span>
                            <h3>Codes</h3>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-3 col-sm-4">
                        <div class="single-funfacts">
                            <div class="circlechart" data-percentage="75"></div>
                            <span>Our happy</span>
                            <h3>Clients</h3>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-3 col-sm-4">
                        <div class="single-funfacts">
                            <div class="circlechart" data-percentage="85"></div>
                            <span>Projects</span>
                            <h3>Design</h3>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-3 col-sm-4 offset-lg-0 offset-md-0 offset-sm-4">
                        <div class="single-funfacts">
                            <div class="circlechart" data-percentage="95"></div>
                            <span>Completed</span>
                            <h3>Projects</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End FunFacts Area -->
        
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
                </div>
            </div>

            <div class="shape13"><img src="{{asset('themes/it-startups/assets/img/shape/13.svg') }}" alt="image"></div>
            <div class="shape14"><img src="{{asset('themes/it-startups/assets/img/shape/13.svg') }}" alt="image"></div>
        </section>
        <!-- End Team Area -->

        <!-- Start Testimonials Area -->
        <section class="testimonials-area">
            <div class="container-fluid p-0">
                <div class="testimonials-inner-area jarallax" data-jarallax='{"speed": 0.3}'>
                    <div class="testimonials-inner-content">
                        <div class="testimonials-slides owl-carousel owl-theme">
                            <div class="single-testimonials-item">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>

                                <div class="client-info">
                                    <img src="{{asset('themes/it-startups/assets/img/author1.jpg') }}" alt="image">

                                    <h3>John Doe</h3>
                                    <span>Marketing</span>
                                </div>
                            </div>

                            <div class="single-testimonials-item">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>

                                <div class="client-info">
                                    <img src="{{asset('themes/it-startups/assets/img/author2.jpg') }}" alt="image">

                                    <h3>Steven Smith</h3>
                                    <span>Marketing</span>
                                </div>
                            </div>

                            <div class="single-testimonials-item">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>

                                <div class="client-info">
                                    <img src="{{asset('themes/it-startups/assets/img/author3.jpg') }}" alt="image">

                                    <h3>Sarah Taylor</h3>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <div class="circle-map"><img src="{{asset('themes/it-startups/assets/img/circle-map3.png') }}" alt="image"></div>
                    </div>

                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="flaticon-play-button"></i></a>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->
@endsection
@section('custom-scripts')

@endsection
