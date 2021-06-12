@extends('frontend.westeros.layouts.master')

@section('title')
LINHFISH SHOP
@endsection
@section('main')
Home /
@endsection

@section('sub')
ORDER
@endsection

@section('custom-css')
<style>

</style>
@endsection
@section('main-content')
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('img/LINH.png') }}');">
    <h2 class="ltext-105 cl0 txt-center">
        Đặt hàng hoàn tất
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Đặt hàng hoàn tất
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Chúng tôi đã gởi email xác nhận đơn hàng cho Quý khách. Quý khách vui vòng kiểm tra hộp thư.
                        Xin cám ơn Quý khách đã tin tưởng sản phẩm của chúng tôi.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Nếu cần hỗ trợ, vui lòng gọi đến đường dây nóng của chúng tôi để được hỗ trợ khi cần thiết:<br />
                        TEL: 0915-659-223
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{ asset('themes/cozastore/images/about-01.jpg') }}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custom-scripts')

@endsection
