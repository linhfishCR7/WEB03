@extends('frontend.it-startups.layouts.master')

@section('title')
Service
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
    <!-- Start Services Area -->
    <section class="services-area ptb-110">
        <div class="container">
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
        </div>

        <div class="shape13"><img src="{{asset('themes/it-startups/assets/img/shape/13.svg')}}" alt="image"></div>
        <div class="shape14"><img src="{{asset('themes/it-startups/assets/img/shape/13.svg')}}" alt="image"></div>
    </section>
    <!-- End Services Area -->

@endsection
@section('custom-scripts')

@endsection
