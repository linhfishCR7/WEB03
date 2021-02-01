<div class="actions">
    <figure class="liquid">
        <img src="{{ asset('storage/upload/'.$ds_sanpham->sp_hinh) }}" alt="product1">
    </figure>
    <div>
        <a href="#qv-p{{ $ds_sanpham->sp_ma }}" class="button quick-view" data-effect="mfp-3d-unfold">
            <!-- SVG QUICKVIEW -->
            <svg class="svg-quickview">
                <use xlink:href="#svg-quickview"></use>
            </svg>
            <!-- /SVG QUICKVIEW -->
        </a>
        <!-- QUICK VIEW POPUP -->
        <div id="qv-p{{ $ds_sanpham->sp_ma }}" class="product-quick-view mfp-with-anim mfp-hide">
            <!-- PRODUCT PICTURES -->
            <div class="product-pictures">
                <div class="product-photo">
                    <figure class="liquid">
                        <img src="{{ asset('storage/upload/'.$ds_sanpham->sp_hinh) }}" alt="product-image">
                    </figure>
                </div>
                <ul class="picture-views">
                    <!-- VIEW -->
                    <li class="selected">
                        <figure class="liquid">
                            <img src="{{ asset('storage/upload/'.$ds_sanpham->sp_hinh) }}" alt="picture-view">
                        </figure>
                    </li>
                    <!-- /VIEW -->

                    <!-- VIEW -->
                    <li>
                        <figure class="liquid">
                            <img src="images/items/01.png" alt="picture-view">
                        </figure>
                    </li>
                    <!-- /VIEW -->
                </ul>
            </div>
            <!-- /PRODUCT PICTURES -->

            <!-- PRODUCT DESCRIPTION -->
            <div class="product-description">
                <a href="#">
                    <p class="highlighted category">{{ $ds_sanpham->l_ten }}</p>
                </a>
                <a href="#">
                    <h6>{{ $ds_sanpham->sp_ten }}</h6>
                </a>
                <!-- RATING -->
                <ul class="rating big">
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
                <p>{{ $ds_sanpham->sp_thongTin }}</p>
                <p class="highlighted current">${{ $ds_sanpham->sp_giaBan }}</p>
                {{-- <p class="highlighted previous">$90.25</p> --}}
                <h5 class="stock">Availability:
                    <!-- SVG CHECK -->
                    <svg class="svg-check">
                        <use xlink:href="#svg-check"></use>
                    </svg>
                    <!-- /SVG CHECK -->
                    <span class="available">In Stock</span>
                </h5>
                {{-- <h5>Select Size:</h5>
                <form class="westeros-form">
                    <input id="small1" type="radio" name="size" value="small">
                    <label for="small1"><span class="radio"><span></span></span>Small</label>

                    <input id="medium1" type="radio" name="size" value="medium">
                    <label for="medium1"><span class="radio"><span></span></span>Medium</label>

                    <input id="large1" type="radio" name="size" value="large" checked>
                    <label for="large1"><span class="radio"><span></span></span>Large</label>

                    <input id="extralarge1" type="radio" name="size" value="extralarge">
                    <label for="extralarge1"><span class="radio"><span></span></span>Extra Large</label>
                </form> --}}
                {{-- <div class="color-selection">
                    <h5>Select Base Color:</h5>
                    <!-- COLORPICKER -->
                    <ul class="colorpicker">
                        @foreach($danhsachmau as $danhsachmau )
                        <li ><span data-color="{{$danhsachmau->m_hexan}}"></span></li>
                @endforeach

                </ul>
                <!-- /COLORPICKER -->
            </div> --}}
            {{-- <div>
                    <h5>Quantity:</h5>
                    <!-- COUNTER -->
                    <div class="counter">
                        <div class="control left"></div>
                        <div class="value">
                            <h5>2</h5>
                        </div>
                        <div class="control right"></div>
                    </div>
                    <!-- /COUNTER -->
                </div> --}}
            <ngcart-addtocart template-url="{{ asset('vendor/ngCart/template/ngCart/addtocart.html') }}" id="{{ $ds_sanpham->sp_ma }}" name="{{ $ds_sanpham->sp_ten }}" price="{{ $ds_sanpham->sp_giaBan }}" quantity="1" quantity-max="30" data="{ sp_hinh_url: '{{ asset('storage/upload/' . $ds_sanpham->sp_hinh) }}' }">
                <div class="options">
                    <a href="#" class="button medium fb"></a>
                    <a href="#" class="button medium twt"></a>
                    <a href="#compare-modal" class="button medium compare cmp-popup" data-effect="mfp-3d-unfold">
                        <!-- SVG COMPARE -->
                        <svg class="svg-compare">
                            <use xlink:href="#svg-compare"></use>
                        </svg>
                        <!-- /SVG COMPARE -->
                    </a>
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
                        ADD TO CART
                    </a>
                </div>
            </ngcart-addtocart>
        </div>
        <!-- /PRODUCT DESCRIPTION -->
    </div>
    <!-- /QUICK VIEW POPUP -->
    <a href="{{route('frontend.productDetail',['id'=> $ds_sanpham->sp_ma])}}" class="button full-view">
        <!-- SVG FULLVIEW -->
        <svg class="svg-fullview">
            <use xlink:href="#svg-fullview"></use>
        </svg>
        <!-- /SVG FULLVIEW -->
    </a>
    <a href="#compare-modal" class="button compare cmp-popup" data-effect="mfp-3d-unfold">
        <!-- SVG COMPARE -->
        <svg class="svg-compare">
            <use xlink:href="#svg-compare"></use>
        </svg>
        <!-- /SVG COMPARE -->
    </a>
</div>
</div>
