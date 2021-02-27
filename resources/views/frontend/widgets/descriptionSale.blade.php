<div class="description">
    <div class="clearfix">
        <a href="#">
            <p class="highlighted category">{{ $ds_sanpham_giamdan->l_ten }}</p>
        </a>
        <!-- RATING -->
        <ul class="rating">
            <li class="filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="filled">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li>
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
        </ul>
        <!-- /RATING -->
    </div>
    <div class="clearfix">
        <a href="#">
            <h6>{{ $ds_sanpham_giamdan->sp_ten }}</h6>
        </a>
    </div>
    <div class="clearfix">
        <p>{{ $ds_sanpham_giamdan->sp_thongTin }}</p>
        <p class="highlighted current">{{ $ds_sanpham_giamdan->sp_giaBan }}</p>
    </div>
    <ngcart-addtocart template-url="{{ asset('vendor/ngCart/template/ngCart/addtocart.html') }}" id="{{ $ds_sanpham_giamdan->sp_ma }}" name="{{ $ds_sanpham_giamdan->sp_ten }}" price="{{ $ds_sanpham_giamdan->sp_giaBan }}" quantity="1" quantity-max="30" data="{ sp_hinh_url: '{{ asset('storage/upload/' . $ds_sanpham_giamdan->sp_hinh) }}' }">
        <!-- CART OPTIONS -->
        <div class="cart-options">
            <a href="#" class="button medium wishlist">
                <!-- SVG WISHLIST -->
                <svg class="svg-wishlist">
                    <use xlink:href="#svg-wishlist"></use>
                </svg>
                <!-- /SVG WISHLIST -->
            </a>
            <a href="#" class="button cart-add">
                <!-- SVG PLUS -->
                <svg class="svg-plus">
                    <use xlink:href="#svg-plus"></use>
                </svg>
                <!-- /SVG PLUS -->
                Add to Cart
            </a>

        </div>
        <!-- /CART OPTIONS -->
    </ngcart-addtocart>

</div>

