@extends('frontend.it-startups.layouts.master')

@section('title')
Shop
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
<!-- Start Shop Area -->
<section class="shop-area ptb-110">
    <div class="container">
        <div class="woocommerce-topbar">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <div class="woocommerce-result-count">
                        <p>Showing 1-8 of 14 results</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="woocommerce-topbar-ordering">
                        <select>
                            <option value="1">Default sorting</option>
                            <option value="2">Sort by popularity</option>
                            <option value="0">Sort by average rating</option>
                            <option value="3">Sort by latest</option>
                            <option value="4">Sort by price: low to high</option>
                            <option value="5">Sort by price: high to low</option>
                            <option value="6">Sort by new</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($ds_sanpham as $sanpham)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('frontend.new.shop-detail',['id'=> $sanpham->sp_ma])}}">
                            <img src="{{ asset('storage/upload/'.$sanpham->sp_hinh) }}" width="350px;" alt="image">
                            <img src="{{ asset('storage/upload/'.$sanpham->sp_hinh) }}" width="350px;" alt="image">
                        </a>

                        <ngcart-addtocart template-url="{{ asset('vendor/ngCart/template/ngCart/addtocart.html') }}" id="{{ $sanpham->sp_ma }}" name="{{ $sanpham->sp_ten }}" price="{{ $sanpham->sp_giaBan }}" quantity="1" quantity-max="30" data="{ sp_hinh_url: '{{ asset('storage/upload/' . $sanpham->sp_hinh) }}' }">
                            <a href="#" class="add-to-cart-btn">Add To Cart <i class="flaticon-shopping-basket"></i></a>
                        </ngcart-addtocart>
                    </div>

                    <div class="product-content">
                        <h3><a href="#">{{$sanpham->sp_ten}}</a></h3>
                        <div class="price">
                            <span class="new">$ {{$sanpham->sp_giaBan}}</span>
                            {{-- <span class="old">$12.50</span> --}}
                        </div>
                        {{-- <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
            {{$ds_sanpham->links()}}
        </div>
    </div>
</section>
<!-- End Shop Area -->

@endsection
@section('custom-scripts')

@endsection
