@extends('frontend.layouts.master')

@section('title')
Shop
@endsection
@section('main')
Home /
@endsection

@section('sub')
Shop
@endsection

@section('custom-css')
<style>

</style>
@endsection
@section('main-content')

<!-- SHOP -->
<div id="shop-wrap">
    <section id="shop" class="right expandible-sidebar">
        <!-- SIDEBAR CONTROL -->
        <div class="sidebar-control">
            <!-- SVG GEAR -->
            <svg class="svg-gear">
                <use xlink:href="#svg-gear"></use>
            </svg>
            <!-- /SVG GEAR -->
        </div>
        <!-- /SIDEBAR CONTROL -->

        <!-- SHOP SIDEBAR -->

        @include('frontend.pages.shop.shopBar')
        <!-- /SHOP SIDEBAR -->

        <!-- SHOP PRODUCTS -->
        @yield('shopProduct')

        <!-- /SHOP PRODUCTS -->
    </section>
</div>
<!-- /SHOP -->

@endsection
@section('custom-scripts')

@endsection
