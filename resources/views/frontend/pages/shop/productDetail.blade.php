@extends('frontend.pages.shop.shop')

@section('shopProduct')

<div class="shop-products">
    <!-- COMPARE MODAL -->
    @include('frontend.widgets.compareProduct')
    <!-- /COMPARE MODAL -->

    <!-- FULL VIEW -->
    <div class="product-quick-view full view">
        <!-- PRODUCT PICTURES -->
        <div class="product-pictures">
            <div class="product-photo">
                <figure class="liquid">
                    <img src="{{ asset('storage/upload/'.$sp->sp_hinh) }}" alt="product-image">
                </figure>
            </div>
            <ul class="picture-views">
                <!-- VIEW -->
                @foreach( $danhsachhinhanhlienquan as $danhsachhinhanhlienquan)
                <li class="">
                    <figure class="liquid">
                        <img src="{{ asset('storage/upload/'.$danhsachhinhanhlienquan->ha_ten) }}" alt="picture-view">
                    </figure>
                </li>
                @endforeach

                <!-- /VIEW -->
            </ul>
        </div>
        <!-- /PRODUCT PICTURES -->

        <!-- PRODUCT DESCRIPTION -->
        <div class="product-description">
            <a href="#">
                {{-- <p class="highlighted category">{{ $sp->loaisanpham->l_ten}}</p> --}}
            </a>
            <a href="#">
                <h6>{{ $sp->sp_ten}}</h6>
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
            <p>{{ $sp->sp_thongTin}}</p>
            <p class="highlighted current">${{ $sp->sp_giaBan}}</p>
            <h5 class="stock">Availability:
                <!-- SVG CHECK -->
                <svg class="svg-check">
                    <use xlink:href="#svg-check"></use>
                </svg>
                <!-- /SVG CHECK -->
                <span class="available">In Stock</span>
            </h5>
            <h5>Select Size:</h5>
            <form class="westeros-form">
                <input id="small1" type="radio" name="size" value="small">
                <label for="small1"><span class="radio"><span></span></span>Small</label>

                <input id="medium1" type="radio" name="size" value="medium">
                <label for="medium1"><span class="radio"><span></span></span>Medium</label>

                <input id="large1" type="radio" name="size" value="large" checked>
                <label for="large1"><span class="radio"><span></span></span>Large</label>

                <input id="extralarge1" type="radio" name="size" value="extralarge">
                <label for="extralarge1"><span class="radio"><span></span></span>Extra Large</label>
            </form>
            <div class="color-selection">
                <h5>Select Base Color:</h5>
                <!-- COLORPICKER -->
                <ul class="colorpicker">
                    <li><span data-color="#008fbe"></span></li>
                    <li><span data-color="#17ccac"></span></li>
                    <li><span data-color="#4c4cab"></span></li>
                    <li><span data-color="#252525"></span></li>
                </ul>
                <!-- /COLORPICKER -->
            </div>
            <div>
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
            </div>
            <ngcart-addtocart template-url="{{ asset('vendor/ngCart/template/ngCart/addtocart.html') }}" id="{{ $sp->sp_ma }}" name="{{ $sp->sp_ten }}" price="{{ $sp->sp_giaBan }}" quantity="1" quantity-max="30" data="{ sp_hinh_url: '{{ asset('storage/upload/' . $sp->sp_hinh) }}' }">
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
    <!-- /FULL VIEW -->

    <!-- DESCRIPTION TAB -->
    <ul class="description-tab">
        <li>
            <a href="#">Full Description</a>
            <article class="item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in. Lorem ipsum dolor sit amet, <span>consectetur adipisicing elit</span>, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <span>eiusmod eru</span> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in nisi ut aliquip ex ea loremn commodo consequat nostrud exercitation ullamco laboris.</p>
            </article>
        </li>
        <li>
            <a href="#">Reviews (2)</a>
            <article class="item multiple">
                <!-- RATE -->
                <div class="sub-item rate">
                    <!-- RATING -->
                    <ul class="rating large">
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
                    <h5><span>4/5</span> Based On 2 Review(s)</h5>
                </div>
                <!-- /RATE -->

                <!-- REVIEW -->
                <div class="sub-item review">
                    <h5>Comfortable and Trendy</h5>
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
                        <li class="filled">
                            <!-- SVG STAR -->
                            <svg class="svg-star">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                            <!-- /SVG STAR -->
                        </li>
                    </ul>
                    <!-- /RATING -->
                    <p class="author">Jenny Envato - 24/10/14</p>
                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
                </div>
                <!-- /REVIEW -->

                <!-- REVIEW -->
                <div class="sub-item review">
                    <h5>Not Safe For Washing Machine</h5>
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
                        <li>
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
                    <p class="author">Faye Valentine - 15/09/14</p>
                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in. Duis aute irure dolor in. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat.</p>
                </div>
                <!-- /REVIEW -->

                <!-- REVIEW FORM -->
                <div class="sub-item review-form">
                    <h5>Write a Review</h5>
                    <div class="featured-form">
                        <form class="westeros-form">
                            <div class="left">
                                <label class="rl-label required">Your Name</label>
                                <input type="text" placeholder="Enter your name or nickname here...">
                            </div>
                            <div class="right">
                                <label class="rl-label">Review Summary</label>
                                <input type="text" placeholder="Enter a short title here...">
                            </div>
                            <div>
                                <label class="rl-label required">Your Review</label>
                                <textarea placeholder="Write your full review here..."></textarea>
                            </div>
                            <div class="left">
                                <label class="rl-label required">Your Stars Rating</label>
                                <!-- RATING -->
                                <ul class="rating large rater">
                                    <li>
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
                                    <li>
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
                            <button class="button">Post Your Review</button>
                        </form>
                    </div>
                </div>
                <!-- /REVIEW FORM -->
            </article>
        </li>
    </ul>
    <!-- /DESCRIPTION TAB -->

    {{-- <h3 class="title heading related-p">Related Products</h3> --}}
    <!-- PRODUCT LIST -->
    {{-- <ul class="product-list grid">
        <!-- PRODUCT -->
        <li class="list-item">
            <!-- ACTIONS -->
            <div class="actions">
                <figure class="liquid">
                    <img src="images/items/15.png" alt="product">
                </figure>
                <div>
                    <a href="#qv-p2" class="button quick-view" data-effect="mfp-3d-unfold">
                        <!-- SVG QUICKVIEW -->
                        <svg class="svg-quickview">
                            <use xlink:href="#svg-quickview"></use>
                        </svg>
                        <!-- /SVG QUICKVIEW -->
                    </a>
                    <!-- QUICK VIEW POPUP -->
                    <div id="qv-p2" class="product-quick-view mfp-with-anim mfp-hide">
                        <!-- PRODUCT PICTURES -->
                        <div class="product-pictures">
                            <div class="product-photo">
                                <figure class="liquid">
                                    <img src="images/items/15.png" alt="product">
                                </figure>
                            </div>
                            <ul class="picture-views">
                                <!-- VIEW -->
                                <li class="selected">
                                    <figure class="liquid">
                                        <img src="images/items/15.png" alt="picture-view">
                                    </figure>
                                </li>
                                <!-- /VIEW -->
                            </ul>
                        </div>
                        <!-- /PRODUCT PICTURES -->

                        <!-- PRODUCT DESCRIPTION -->
                        <div class="product-description">
                            <a href="women-shop.html">
                                <p class="highlighted category">T-Shirts</p>
                            </a>
                            <a href="full-view.html">
                                <h6>The Devil Pin</h6>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
                            <p class="highlighted current">$54.00</p>
                            <h5 class="stock">Availability:
                                <!-- SVG CHECK -->
                                <svg class="svg-check">
                                    <use xlink:href="#svg-check"></use>
                                </svg>
                                <!-- /SVG CHECK -->
                                <span class="available">In Stock</span>
                            </h5>
                            <h5>Select Size:</h5>
                            <form class="westeros-form">
                                <input id="small2" type="radio" name="size" value="small">
                                <label for="small2"><span class="radio"><span></span></span>Small</label>

                                <input id="medium2" type="radio" name="size" value="medium">
                                <label for="medium2"><span class="radio"><span></span></span>Medium</label>

                                <input id="large2" type="radio" name="size" value="large" checked>
                                <label for="large2"><span class="radio"><span></span></span>Large</label>

                                <input id="extralarge2" type="radio" name="size" value="extralarge">
                                <label for="extralarge2"><span class="radio"><span></span></span>Extra Large</label>
                            </form>
                            <div class="color-selection">
                                <h5>Select Base Color:</h5>
                                <!-- COLORPICKER -->
                                <ul class="colorpicker">
                                    <li><span data-color="#008fbe"></span></li>
                                    <li class="selected"><span data-color="#17ccac"></span></li>
                                    <li><span data-color="#4c4cab"></span></li>
                                    <li><span data-color="#252525"></span></li>
                                </ul>
                                <!-- /COLORPICKER -->
                            </div>
                            <div>
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
                            </div>
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
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                        <!-- /PRODUCT DESCRIPTION -->
                    </div>
                    <!-- /QUICK VIEW POPUP -->
                    <a href="full-view.html" class="button full-view">
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
            <!-- /ACTIONS -->

            <!-- DESCRIPTION -->
            <div class="description">
                <div class="clearfix">
                    <a href="women-shop.html">
                        <p class="highlighted category">T-Shirts</p>
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
                    <a href="full-view.html">
                        <h6>The Devil Pin</h6>
                    </a>
                </div>
                <div class="clearfix">
                    <p>Lorem ipsum dolor</p>
                    <p class="highlighted current">$54.00</p>
                </div>

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
            </div>
            <!-- /DESCRIPTION -->
        </li>
        <!-- /PRODUCT -->

        <!-- PRODUCT -->
        <li class="list-item">
            <!-- ACTIONS -->
            <div class="actions">
                <figure class="liquid">
                    <img src="images/items/13.png" alt="product1">
                </figure>
                <div>
                    <a href="#qv-p8" class="button quick-view" data-effect="mfp-3d-unfold">
                        <!-- SVG QUICKVIEW -->
                        <svg class="svg-quickview">
                            <use xlink:href="#svg-quickview"></use>
                        </svg>
                        <!-- /SVG QUICKVIEW -->
                    </a>
                    <!-- QUICK VIEW POPUP -->
                    <div id="qv-p8" class="product-quick-view mfp-with-anim mfp-hide">
                        <!-- PRODUCT PICTURES -->
                        <div class="product-pictures">
                            <div class="product-photo">
                                <figure class="liquid">
                                    <img src="images/items/13.png" alt="product-image">
                                </figure>
                            </div>
                            <ul class="picture-views">
                                <!-- VIEW -->
                                <li class="selected">
                                    <figure class="liquid">
                                        <img src="images/items/13.png" alt="picture-view">
                                    </figure>
                                </li>
                                <!-- /VIEW -->
                            </ul>
                        </div>
                        <!-- /PRODUCT PICTURES -->

                        <!-- PRODUCT DESCRIPTION -->
                        <div class="product-description">
                            <a href="women-shop.html">
                                <p class="highlighted category">T-Shirts</p>
                            </a>
                            <a href="full-view.html">
                                <h6>Flower Skulled</h6>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
                            <p class="highlighted current">$38.00</p>
                            <h5 class="stock">Availability:
                                <!-- SVG CHECK -->
                                <svg class="svg-check">
                                    <use xlink:href="#svg-check"></use>
                                </svg>
                                <!-- /SVG CHECK -->
                                <span class="available">In Stock</span>
                            </h5>
                            <h5>Select Size:</h5>
                            <form class="westeros-form">
                                <input id="small3" type="radio" name="size" value="small">
                                <label for="small3"><span class="radio"><span></span></span>Small</label>

                                <input id="medium3" type="radio" name="size" value="medium">
                                <label for="medium3"><span class="radio"><span></span></span>Medium</label>

                                <input id="large3" type="radio" name="size" value="large" checked>
                                <label for="large3"><span class="radio"><span></span></span>Large</label>

                                <input id="extralarge3" type="radio" name="size" value="extralarge">
                                <label for="extralarge3"><span class="radio"><span></span></span>Extra Large</label>
                            </form>
                            <div class="color-selection">
                                <h5>Select Base Color:</h5>
                                <!-- COLORPICKER -->
                                <ul class="colorpicker">
                                    <li><span data-color="#008fbe"></span></li>
                                    <li class="selected"><span data-color="#17ccac"></span></li>
                                    <li><span data-color="#4c4cab"></span></li>
                                    <li><span data-color="#252525"></span></li>
                                </ul>
                                <!-- /COLORPICKER -->
                            </div>
                            <div>
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
                            </div>
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
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                        <!-- /PRODUCT DESCRIPTION -->
                    </div>
                    <!-- /QUICK VIEW POPUP -->
                    <a href="full-view.html" class="button full-view">
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
            <!-- /ACTIONS -->

            <!-- DESCRIPTION -->
            <div class="description">
                <div class="clearfix">
                    <a href="women-shop.html">
                        <p class="highlighted category">T-Shirts</p>
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
                    <a href="full-view.html">
                        <h6>Flower Skulled</h6>
                    </a>
                </div>
                <div class="clearfix">
                    <p class="short-description">Lorem ipsum dolor</p>
                    <p class="long-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
                    <p class="highlighted current">$38.00</p>
                </div>

                <!-- SOCIAL LINKS -->
                <div class="social">
                    <a href="#" class="button medium fb"></a>
                    <a href="#" class="button medium twt"></a>
                </div>
                <!-- SOCIAL LINKS -->

                <!-- CART OPTIONS -->
                <div class="cart-options">
                    <a href="#" class="button medium wishlist">
                        <!-- SVG WISHLIST -->
                        <svg class="svg-wishlist">
                            <use xlink:href="#svg-wishlist"></use>
                        </svg>
                        <!-- /SVG WISHLIST -->
                        <span>Add to Wishlist</span>
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
            </div>
            <!-- /DESCRIPTION -->
        </li>
        <!-- /PRODUCT -->

        <!-- PRODUCT -->
        <li class="list-item">
            <!-- PIN -->
            <div class="pin circle">
                <h6>Sale!</h6>
                <h6 class="percent">20%</h6>
                <h6>off</h6>
            </div>
            <!-- /PIN -->

            <!-- ACTIONS -->
            <div class="actions">
                <figure class="liquid">
                    <img src="images/items/35.png" alt="product1">
                </figure>
                <div>
                    <a href="#qv-p3" class="button quick-view" data-effect="mfp-3d-unfold">
                        <!-- SVG QUICKVIEW -->
                        <svg class="svg-quickview">
                            <use xlink:href="#svg-quickview"></use>
                        </svg>
                        <!-- /SVG QUICKVIEW -->
                    </a>
                    <!-- QUICK VIEW POPUP -->
                    <div id="qv-p3" class="product-quick-view mfp-with-anim mfp-hide">
                        <!-- PRODUCT PICTURES -->
                        <div class="product-pictures">
                            <div class="product-photo">
                                <figure class="liquid">
                                    <img src="images/items/35.png" alt="product-image">
                                </figure>
                            </div>
                            <ul class="picture-views">
                                <!-- VIEW -->
                                <li class="selected">
                                    <figure class="liquid">
                                        <img src="images/items/35.png" alt="picture-view">
                                    </figure>
                                </li>
                                <!-- /VIEW -->
                            </ul>
                        </div>
                        <!-- /PRODUCT PICTURES -->

                        <!-- PRODUCT DESCRIPTION -->
                        <div class="product-description">
                            <a href="merchandising-shop.html">
                                <p class="highlighted category">Pin Badges</p>
                            </a>
                            <a href="full-view.html">
                                <h6>Mo Monster</h6>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
                            <p class="highlighted current">$2.00</p>
                            <p class="highlighted previous">$2.50</p>
                            <h5 class="stock">Availability:
                                <!-- SVG CHECK -->
                                <svg class="svg-plus">
                                    <use xlink:href="#svg-plus"></use>
                                </svg>
                                <!-- /SVG CHECK -->
                                <span class="not-available">No Stock</span>
                            </h5>
                            <h5>Select Size:</h5>
                            <form class="westeros-form">
                                <input id="small4" type="radio" name="size" value="small">
                                <label for="small4"><span class="radio"><span></span></span>Small</label>

                                <input id="medium4" type="radio" name="size" value="medium">
                                <label for="medium4"><span class="radio"><span></span></span>Medium</label>

                                <input id="large4" type="radio" name="size" value="large" checked>
                                <label for="large4"><span class="radio"><span></span></span>Large</label>

                                <input id="extralarge4" type="radio" name="size" value="extralarge">
                                <label for="extralarge4"><span class="radio"><span></span></span>Extra Large</label>
                            </form>
                            <div class="color-selection">
                                <h5>Select Base Color:</h5>
                                <!-- COLORPICKER -->
                                <ul class="colorpicker">
                                    <li><span data-color="#008fbe"></span></li>
                                    <li class="selected"><span data-color="#17ccac"></span></li>
                                    <li><span data-color="#4c4cab"></span></li>
                                    <li><span data-color="#252525"></span></li>
                                </ul>
                                <!-- /COLORPICKER -->
                            </div>
                            <div>
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
                            </div>
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
                                <a href="#" class="button no-stock">
                                    <!-- SVG PLUS -->
                                    <svg class="svg-plus">
                                        <use xlink:href="#svg-plus"></use>
                                    </svg>
                                    <!-- /SVG PLUS -->
                                    Out Of Stock
                                </a>
                            </div>
                        </div>
                        <!-- /PRODUCT DESCRIPTION -->
                    </div>
                    <!-- /QUICK VIEW POPUP -->
                    <a href="full-view.html" class="button full-view">
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
            <!-- /ACTIONS -->

            <!-- DESCRIPTION -->
            <div class="description">
                <div class="clearfix">
                    <a href="merchandising-shop.html">
                        <p class="highlighted category">Pin Badges</p>
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
                    <a href="full-view.html">
                        <h6>Mo Monster</h6>
                    </a>
                    <p class="highlighted previous">$2.50</p>
                </div>
                <div class="clearfix">
                    <p>Lorem ipsum dolor</p>
                    <p class="highlighted current">$2.00</p>
                </div>

                <!-- CART OPTIONS -->
                <div class="cart-options">
                    <a href="#" class="button medium wishlist">
                        <!-- SVG WISHLIST -->
                        <svg class="svg-wishlist">
                            <use xlink:href="#svg-wishlist"></use>
                        </svg>
                        <!-- /SVG WISHLIST -->
                    </a>
                    <a href="#" class="button no-stock">
                        <!-- SVG PLUS -->
                        <svg class="svg-plus">
                            <use xlink:href="#svg-plus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                        Out Of Stock
                    </a>
                </div>
                <!-- /CART OPTIONS -->
            </div>
            <!-- /DESCRIPTION -->
        </li>
        <!-- /PRODUCT -->
    </ul> --}}
    <!-- /PRODUCT LIST -->
</div>

@endsection
