@extends('frontend.it-startups.layouts.master')

@section('title')
Index
@endsection
@section('class')
evolta-nav
@endsection
@section('subclass')
container-fluid
@endsection
@section('custom-css')
@endsection
<!-- Start Main Banner Area -->
@include('frontend.it-startups.layouts.partials.main-banner')
<!-- End Main Banner Area -->
@section('main-content')
<!-- Start Services Area -->
        <section class="services-area ptb-110">
            <div class="container">
                <div class="section-title">
                    <div class="content">
                        <span>Our Services</span>
                        <h2>We Offer Professional IT Solutions For Business</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="image">
                        <img src="{{ asset('themes/it-startups/assets/img/section-title/1.png')}}" alt="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-plugin"></i>
                            </div>

                            <h3><a href="#">Product Engineering</a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel adipiscing aliqua.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-computer-graphic"></i>
                            </div>

                            <h3><a href="#">UX/UI Design</a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel adipiscing aliqua.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-analysis"></i>
                            </div>

                            <h3><a href="#">Big Data Analysis</a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel adipiscing aliqua.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-code"></i>
                            </div>

                            <h3><a href="#">Desktop Applications</a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel adipiscing aliqua.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-application"></i>
                            </div>

                            <h3><a href="#">Mobile Applications</a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel adipiscing aliqua.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="icon">
                                <i class="flaticon-cyber-security"></i>
                            </div>

                            <h3><a href="#">Cyber Security</a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel adipiscing aliqua.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape13"><img src="{{ asset('themes/it-startups/assets/img/shape/13.svg')}}" alt="image"></div>
            <div class="shape14"><img src="{{ asset('themes/it-startups/assets/img/shape/13.svg')}}" alt="image"></div>
        </section>
        <!-- End Services Area -->

        <!-- Start About Area -->
        <section class="about-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{ asset('themes/it-startups/assets/img/about-img1.jpg')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span>About Us</span>
                            <h2>We've Been Thriving in 37 Years The Tech Area</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra.</p>
                            <a href="#" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Why Choose Us Area -->
        <section class="why-choose-area ptb-110">
            <div class="container">
                <div class="section-title">
                    <div class="content">
                        <span>Why choose us</span>
                        <h2>We Different From Others Should Choose Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="image">
                        <img src="{{ asset('themes/it-startups/assets/img/section-title/2.png')}}" alt="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-choose-box">
                            <img src="{{ asset('themes/it-startups/assets/img/why-choose-us/1.jpg')}}" alt="image">

                            <div class="title">
                                <h3>Industry Expertise</h3>
                            </div>

                            <div class="content">
                                <div class="inner-content">
                                    <h3><a href="#">Industry Expertise</a></h3>
                                    <p>Lorem ipsum dolor amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.  Quis ipsum suspendisse ultrices gravida.</p>
                                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-choose-box">
                            <img src="{{ asset('themes/it-startups/assets/img/why-choose-us/2.jpg')}}" alt="image">

                            <div class="title">
                                <h3>Expertise & Leadership</h3>
                            </div>

                            <div class="content">
                                <div class="inner-content">
                                    <h3><a href="#">Expertise & Leadership</a></h3>
                                    <p>Lorem ipsum dolor amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.  Quis ipsum suspendisse ultrices gravida.</p>
                                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-choose-box">
                            <img src="{{ asset('themes/it-startups/assets/img\why-choose-us\3.jpg')}}" alt="image">

                            <div class="title">
                                <h3>Dedicated IT Solution</h3>
                            </div>

                            <div class="content">
                                <div class="inner-content">
                                    <h3><a href="#">Dedicated IT Solution</a></h3>
                                    <p>Lorem ipsum dolor amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.  Quis ipsum suspendisse ultrices gravida.</p>
                                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape14"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
            <div class="shape15"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
        </section>
        <!-- End Why Choose Us Area -->

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

        <!-- Start CTA Area -->
        <section class="cta-area jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="cta-content">
                    <span>We Take Care of Your Technology</span>
                    <h2>Focus on Your Business</h2>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </section>
        <!-- End CTA Area -->

        <!-- Start Projects Area -->
        <section class="projects-area ptb-110">
            <div class="container">
                <div class="section-title">
                    <div class="content">
                        <span>Recent projects</span>
                        <h2>Proud Projects That Make Us Stand Out</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="image">
                        <img src="{{ asset('themes/it-startups/assets/img\section-title\3.png')}}" alt="image">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="projects-slides owl-carousel owl-theme">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-projects-box">
                            <a href="#"><img src="{{ asset('themes/it-startups/assets/img\projects\1.jpg')}}" alt="image"></a>

                            <div class="projects-content">
                                <span>Design/Idea</span>
                                <h3><a href="#">Flutter Development</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-projects-box">
                            <a href="#"><img src="{{ asset('themes/it-startups/assets/img\projects\2.jpg')}}" alt="image"></a>

                            <div class="projects-content">
                                <span>Design/Development</span>
                                <h3><a href="#">Application Development</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-projects-box">
                            <a href="#"><img src="{{ asset('themes/it-startups/assets/img\projects\3.jpg')}}" alt="image"></a>

                            <div class="projects-content">
                                <span>Design</span>
                                <h3><a href="#">Web Development</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-projects-box">
                            <a href="#"><img src="{{ asset('themes/it-startups/assets/img\projects\4.jpg')}}" alt="image"></a>

                            <div class="projects-content">
                                <span>Idea</span>
                                <h3><a href="#">Big Data Analysis</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-projects-box">
                            <a href="#"><img src="{{ asset('themes/it-startups/assets/img\projects\5.jpg')}}" alt="image"></a>

                            <div class="projects-content">
                                <span>Guard</span>
                                <h3><a href="#">Cyber Security</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape13"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
            <div class="shape15"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
        </section>
        <!-- End Projects Area -->

        <!-- Start Partner Area -->
        <div class="partner-area bg-f2feee">
            <div class="container">
                <div class="partner-list">
                    <div class="partner-item">
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\1.png')}}" alt="image"></a>
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\1.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\2.png')}}" alt="image"></a>
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\2.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\1.png')}}" alt="image"></a>
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\1.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\3.png')}}" alt="image"></a>
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\3.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\4.png')}}" alt="image"></a>
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\4.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\5.png')}}" alt="image"></a>
                        <a href="#" target="_blank"><img src="{{ asset('themes/it-startups/assets/img\partner\5.png')}}" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

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
                        <img src="{{ asset('themes/it-startups/assets/img\section-title\4.png')}}" alt="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img src="{{ asset('themes/it-startups/assets/img\team\1.jpg')}}" alt="image">

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
                                <img src="{{ asset('themes/it-startups/assets/img\team\2.jpg')}}" alt="image">

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
                                <img src="{{ asset('themes/it-startups/assets/img\team\3.jpg')}}" alt="image">

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
                                <img src="{{ asset('themes/it-startups/assets/img\team\4.jpg')}}" alt="image">

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

            <div class="shape13"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
            <div class="shape14"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
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
                                    <img src="{{ asset('themes/it-startups/assets/img\author1.jpg')}}" alt="image">

                                    <h3>John Doe</h3>
                                    <span>Marketing</span>
                                </div>
                            </div>

                            <div class="single-testimonials-item">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>

                                <div class="client-info">
                                    <img src="{{ asset('themes/it-startups/assets/img\author2.jpg')}}" alt="image">

                                    <h3>Steven Smith</h3>
                                    <span>Marketing</span>
                                </div>
                            </div>

                            <div class="single-testimonials-item">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>

                                <div class="client-info">
                                    <img src="{{ asset('themes/it-startups/assets/img\author3.jpg')}}" alt="image">

                                    <h3>Sarah Taylor</h3>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <div class="circle-map"><img src="{{ asset('themes/it-startups/assets/img\circle-map3.png')}}" alt="image"></div>
                    </div>

                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="flaticon-play-button"></i></a>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->

        <!-- Start Blog Area -->
        <section class="blog-area extra-pb ptb-110">
            <div class="container">
                <div class="section-title">
                    <div class="content">
                        <span>Latest News</span>
                        <h2>Our Latest Insights Are On Top All Times</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="image">
                        <img src="{{ asset('themes/it-startups/assets/img\section-title\5.png')}}" alt="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post sticky">
                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>August 16, 2020</li>
                                    </ul>
                                </div>

                                <h3><a href="#">10 Building Mobile Apps With Ionic And React</a></h3>
                            </div>
                        </div>

                        <div class="single-blog-post">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('themes/it-startups/assets/img\blog\1.jpg')}}" alt="image"></a>
                            </div>

                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>August 15, 2020</li>
                                    </ul>
                                </div>

                                <h3><a href="#">Making Peace With The Feast Or Famine Of Freelancing</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('themes/it-startups/assets/img\blog\2.jpg')}}" alt="image"></a>
                            </div>

                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>August 18, 2020</li>
                                    </ul>
                                </div>

                                <h3><a href="#">I Used The Web For A Day On A 50 MB Budget</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>

                        <div class="single-blog-post link">
                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>August 01, 2020</li>
                                    </ul>
                                </div>

                                <h3><a href="#">The hardest leadership advice to follow</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post quote">
                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>August 08, 2020</li>
                                    </ul>
                                </div>

                                <h3><a href="#">How to share your company vision as a leader</a></h3>
                            </div>
                        </div>

                        <div class="single-blog-post">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('themes/it-startups/assets/img\blog\3.jpg')}}" alt="image"></a>
                            </div>

                            <div class="entry-post-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>August 15, 2020</li>
                                    </ul>
                                </div>

                                <h3><a href="#">Here are the 5 most telling signs of micromanagement</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
                                <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape13"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
            <div class="shape14"><img src="{{ asset('themes/it-startups/assets/img\shape\13.svg')}}" alt="image"></div>
        </section>
        <!-- End Blog Area -->
@endsection
@section('custom-scripts')

@endsection