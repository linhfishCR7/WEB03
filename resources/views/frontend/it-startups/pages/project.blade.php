@extends('frontend.it-startups.layouts.master')

@section('title')
Projects
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
    <!-- Start Projects Area -->
    <section class="projects-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-projects-box">
                        <a href="#"><img src="{{asset('themes/it-startups/assets/img/projects/1.jpg') }}" alt="image"></a>

                        <div class="projects-content">
                            <span>Design/Idea</span>
                            <h3><a href="#">Application Development</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-projects-box">
                        <a href="#"><img src="{{asset('themes/it-startups/assets/img/projects/2.jpg') }}" alt="image"></a>

                        <div class="projects-content">
                            <span>Design/Development</span>
                            <h3><a href="#">Application Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-projects-box">
                        <a href="#"><img src="{{asset('themes/it-startups/assets/img/projects/3.jpg') }}" alt="image"></a>

                        <div class="projects-content">
                            <span>Design</span>
                            <h3><a href="#">Web Application Development</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-projects-box">
                        <a href="#"><img src="{{asset('themes/it-startups/assets/img/projects/4.jpg') }}" alt="image"></a>

                        <div class="projects-content">
                            <span>Idea</span>
                            <h3><a href="#">Big Data Analysis</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-projects-box">
                        <a href="#"><img src="{{asset('themes/it-startups/assets/img/projects/5.jpg') }}" alt="image"></a>

                        <div class="projects-content">
                            <span>Guard</span>
                            <h3><a href="#">Cyber Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-projects-box">
                        <a href="#"><img src="{{asset('themes/it-startups/assets/img/projects/6.jpg') }}" alt="image"></a>

                        <div class="projects-content">
                            <span>Development</span>
                            <h3><a href="#">Network Marketing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="shape13"><img src="{{asset('themes/it-startups/assets/img/shape/13.svg') }}" alt="image"></div>
            <div class="shape15"><img src="{{asset('themes/it-startups/assets/img/shape/13.svg') }}" alt="image"></div>
        </div>
    </section>
    <!-- End Projects Area -->
@endsection
@section('custom-scripts')

@endsection
