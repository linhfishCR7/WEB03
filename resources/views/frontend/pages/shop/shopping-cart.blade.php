@extends('frontend.layouts.master')

@section('title')
Shopping Cart
@endsection
@section('main')
Home /
@endsection

@section('sub')
Shopping Cart

@endsection

@section('custom-css')
<style>

</style>
@endsection
@section('main-content')
<!-- Hiển thị giỏ hàng -->
<ngcart-cart template-url="{{ asset('vendor/ngCart/template/ngCart/cart.html') }}"></ngcart-cart>

@endsection
@section('custom-scripts')
<script>
    
</script>
@endsection
