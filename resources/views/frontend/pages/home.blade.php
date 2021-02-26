@extends('frontend.layouts.master')

@section('title')
Index
@endsection
@section('main')
Home /
@endsection

@section('sub')
Index
@endsection

@section('custom-css')
<style>
ul.product-list .list-item figure {
    width: 250px;
    height: 280px;
    margin-bottom: 15px;
}
</style>
@endsection
@section('main-content')
<!-- BANNER -->
	<div id="banner-wrap">
		<section id="banner">
			<div class="main-promo">
				<h2>Welcome to<br><span>Westeros</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eradum eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="/" class="button secondary">Go to the Shop</a>
			</div>
			<div id="banner-monster">
				<div class="speech-bubble">
					<h4>Hi!</h4>
				</div>
				<div class="moustache-shadow"></div>
				<div class="moustache-monster">
					<img src="{{ asset('themes/westeros/images/moustache-monster.png') }}" alt="monster">
				</div>
				<div id="stars">
					<div class="star small"></div>
					<div class="star medium"></div>
					<div class="star large"></div>
				</div>
			</div>
		</section>
	</div>
	<!-- /BANNER -->

	<!-- ADVERTISING -->
	<div id="advertising-wrap">
		<section id="advertising">
			<div class="ad-box clearfix">
				<a href="#">
					<img src="{{ asset('themes/westeros/images/banners/banner1.png') }}" alt="banner1">
				</a>
				<a href="#">
					<img src="{{ asset('themes/westeros/images/banners/banner2.png') }}" alt="banner2">
				</a>
			</div>	
			<a href="#">
				<img src="{{ asset('themes/westeros/images/banners/banner3.png') }}" alt="banner3">
			</a>
		</section>
	</div>
	<!-- /ADVERTISING -->

	@include('frontend.widgets.featureProduct', [$ds_sanpham = $ds_sanpham])

	<!-- /PRODUCT SHOWCASE -->

	<!-- PRODUCT SHOWCASE -->
	{{-- <div class="product-showcase-wrap">
		<section class="product-showcase">
			<h3 class="title">Our Best Selling Products</h3>
			<!-- SLIDE CONTROLS -->
			<ul class="slide-controls">
				<!-- LEFT CONTROL -->
				<li>
					<a href="#" class="button prev">
						<!-- SVG ARROW -->
						<svg class="svg-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</a>
				</li>
				<!-- /LEFT CONTROL -->

				<!-- RIGHT CONTROL -->
				<li>
					<a href="#" class="button next">
						<!-- SVG ARROW -->
						<svg class="svg-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</a>
				</li>
				<!-- /RIGHT CONTROL -->
			</ul>
			<!-- /SLIDE CONTROLS -->

			<!-- PRODUCT LIST -->
			<ul id="owl-bs-products" class="product-list grid owl-carousel">
				<!-- PRODUCT -->
				<li class="list-item">
					<!-- ACTIONS -->
					<div class="actions">
						<figure class="liquid">
							<img src="images/items/33.png" alt="product1">
						</figure>
						<div>
							<a href="#qv-p7" class="button quick-view" data-effect="mfp-3d-unfold">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
							</a>
							<!-- QUICK VIEW POPUP -->
							<div id="qv-p7" class="product-quick-view mfp-with-anim mfp-hide">
								<!-- PRODUCT PICTURES -->
								<div class="product-pictures">
									<div class="product-photo">
										<figure class="liquid">
											<img src="images/items/33.png" alt="product-image">
										</figure>
									</div>
									<ul class="picture-views">
										<!-- VIEW -->
										<li class="selected">
											<figure class="liquid">
												<img src="images/items/33.png" alt="picture-view">
											</figure>
										</li>
										<!-- /VIEW -->
									</ul>
								</div>
								<!-- /PRODUCT PICTURES -->

								<!-- PRODUCT DESCRIPTION -->
								<div class="product-description">
									<a href="merchandising-shop.html"><p class="highlighted category">Phone Cases</p></a>
									<a href="full-view.html"><h6>I-Ladyskull</h6></a>
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
									<p class="highlighted current">$24.00</p>
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
										<input id="small7" type="radio" name="size" value="small">
										<label for="small7"><span class="radio"><span></span></span>Small</label>

										<input id="medium7" type="radio" name="size" value="medium">
										<label for="medium7"><span class="radio"><span></span></span>Medium</label>

										<input id="large7" type="radio" name="size" value="large" checked>
										<label for="large7"><span class="radio"><span></span></span>Large</label>

										<input id="extralarge7" type="radio" name="size" value="extralarge">
										<label for="extralarge7"><span class="radio"><span></span></span>Extra Large</label>
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
							<a href="merchandising-shop.html"><p class="highlighted category">Phone Cases</p></a>
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
							<a href="full-view.html"><h6>I-Ladyskull</h6></a>
						</div>
						<div class="clearfix">
							<p>Lorem ipsum dolor</p>
							<p class="highlighted current">$24.00</p>
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

				<!-- PRODUCT -->
				<li class="list-item">
					<!-- PIN -->
					<div class="pin circle">
						<h6>Sale!</h6>
						<h6 class="percent important">35%</h6>
						<h6>off</h6>
					</div>
					<!-- /PIN -->

					<!-- ACTIONS -->
					<div class="actions">
						<figure class="liquid">
							<img src="images/items/25.png" alt="product1">
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
											<img src="images/items/25.png" alt="product-image">
										</figure>
									</div>
									<ul class="picture-views">
										<!-- VIEW -->
										<li class="selected">
											<figure class="liquid">
												<img src="images/items/25.png" alt="picture-view">
											</figure>
										</li>
										<!-- /VIEW -->
									</ul>
								</div>
								<!-- /PRODUCT PICTURES -->

								<!-- PRODUCT DESCRIPTION -->
								<div class="product-description">
									<a href="#"><p class="highlighted category">T-Shirts</p></a>
									<a href="#"><h6>Happy Doughnut</h6></a>
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
									<p class="highlighted current">$49.00</p>
									<p class="highlighted previous">$61.25</p>
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
										<input id="small8" type="radio" name="size" value="small">
										<label for="small8"><span class="radio"><span></span></span>Small</label>

										<input id="medium8" type="radio" name="size" value="medium">
										<label for="medium8"><span class="radio"><span></span></span>Medium</label>

										<input id="large8" type="radio" name="size" value="large" checked>
										<label for="large8"><span class="radio"><span></span></span>Large</label>

										<input id="extralarge8" type="radio" name="size" value="extralarge">
										<label for="extralarge8"><span class="radio"><span></span></span>Extra Large</label>
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
							<a href="#"><p class="highlighted category">T-Shirts</p></a>
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
							<a href="#"><h6>Happy Doughnut</h6></a>
							<p class="highlighted previous">$61.25</p>
						</div>
						<div class="clearfix">
							<p>Lorem ipsum dolor</p>
							<p class="highlighted current">$49.00</p>
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
							<img src="images/items/04.png" alt="product1">
						</figure>
						<div>
							<a href="#qv-p9" class="button quick-view" data-effect="mfp-3d-unfold">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
							</a>
							<!-- QUICK VIEW POPUP -->
							<div id="qv-p9" class="product-quick-view mfp-with-anim mfp-hide">
								<!-- PRODUCT PICTURES -->
								<div class="product-pictures">
									<div class="product-photo">
										<figure class="liquid">
											<img src="images/items/04.png" alt="product-image">
										</figure>
									</div>
									<ul class="picture-views">
										<!-- VIEW -->
										<li class="selected">
											<figure class="liquid">
												<img src="images/items/04.png" alt="picture-view">
											</figure>
										</li>
										<!-- /VIEW -->
									</ul>
								</div>
								<!-- /PRODUCT PICTURES -->

								<!-- PRODUCT DESCRIPTION -->
								<div class="product-description">
									<a href="#"><p class="highlighted category">T-Shirts</p></a>
									<a href="#"><h6>The Ink Warrior</h6></a>
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
										<input id="small9" type="radio" name="size" value="small">
										<label for="small9"><span class="radio"><span></span></span>Small</label>

										<input id="medium9" type="radio" name="size" value="medium">
										<label for="medium9"><span class="radio"><span></span></span>Medium</label>

										<input id="large9" type="radio" name="size" value="large" checked>
										<label for="large9"><span class="radio"><span></span></span>Large</label>

										<input id="extralarge9" type="radio" name="size" value="extralarge">
										<label for="extralarge9"><span class="radio"><span></span></span>Extra Large</label>
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
							<a href="#"><p class="highlighted category">T-Shirts</p></a>
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
							<a href="#"><h6>The Ink Warrior</h6></a>
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
							<img src="images/items/07.png" alt="product1">
						</figure>
						<div>
							<a href="#qv-p10" class="button quick-view" data-effect="mfp-3d-unfold">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
							</a>
							<!-- QUICK VIEW POPUP -->
							<div id="qv-p10" class="product-quick-view mfp-with-anim mfp-hide">
								<!-- PRODUCT PICTURES -->
								<div class="product-pictures">
									<div class="product-photo">
										<figure class="liquid">
											<img src="images/items/07.png" alt="product-image">
										</figure>
									</div>
									<ul class="picture-views">
										<!-- VIEW -->
										<li class="selected">
											<figure class="liquid">
												<img src="images/items/07.png" alt="picture-view">
											</figure>
										</li>
										<!-- /VIEW -->
									</ul>
								</div>
								<!-- /PRODUCT PICTURES -->

								<!-- PRODUCT DESCRIPTION -->
								<div class="product-description">
									<a href="#"><p class="highlighted category">T-Shirts</p></a>
									<a href="#"><h6>Robo Planet</h6></a>
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
									<p class="highlighted current">$105.00</p>
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
										<input id="small10" type="radio" name="size" value="small">
										<label for="small10"><span class="radio"><span></span></span>Small</label>

										<input id="medium10" type="radio" name="size" value="medium">
										<label for="medium10"><span class="radio"><span></span></span>Medium</label>

										<input id="large10" type="radio" name="size" value="large" checked>
										<label for="large10"><span class="radio"><span></span></span>Large</label>

										<input id="extralarge10" type="radio" name="size" value="extralarge">
										<label for="extralarge10"><span class="radio"><span></span></span>Extra Large</label>
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
							<a href="#"><p class="highlighted category">T-Shirts</p></a>
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
							<a href="#"><h6>Robo Planet</h6></a>
						</div>
						<div class="clearfix">
							<p>Lorem ipsum dolor</p>
							<p class="highlighted current">$105.00</p>
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
							<img src="images/items/37.png" alt="product1">
						</figure>
						<div>
							<a href="#qv-p11" class="button quick-view" data-effect="mfp-3d-unfold">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
							</a>
							<!-- QUICK VIEW POPUP -->
							<div id="qv-p11" class="product-quick-view mfp-with-anim mfp-hide">
								<!-- PRODUCT PICTURES -->
								<div class="product-pictures">
									<div class="product-photo">
										<figure class="liquid">
											<img src="images/items/37.png" alt="product-image">
										</figure>
									</div>
									<ul class="picture-views">
										<!-- VIEW -->
										<li class="selected">
											<figure class="liquid">
												<img src="images/items/37.png" alt="picture-view">
											</figure>
										</li>
										<!-- /VIEW -->
									</ul>
								</div>
								<!-- /PRODUCT PICTURES -->

								<!-- PRODUCT DESCRIPTION -->
								<div class="product-description">
									<a href="#"><p class="highlighted category">Pin Badges</p></a>
									<a href="#"><h6>Smiley Monster</h6></a>
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
										<input id="small11" type="radio" name="size" value="small">
										<label for="small11"><span class="radio"><span></span></span>Small</label>

										<input id="medium11" type="radio" name="size" value="medium">
										<label for="medium11"><span class="radio"><span></span></span>Medium</label>

										<input id="large11" type="radio" name="size" value="large" checked>
										<label for="large11"><span class="radio"><span></span></span>Large</label>

										<input id="extralarge11" type="radio" name="size" value="extralarge">
										<label for="extralarge11"><span class="radio"><span></span></span>Extra Large</label>
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
							<a href="#"><p class="highlighted category">Pin Badges</p></a>
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
							<a href="#"><h6>Smiley Monster</h6></a>
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
							<img src="images/items/34.png" alt="product1">
						</figure>
						<div>
							<a href="#qv-p12" class="button quick-view" data-effect="mfp-3d-unfold">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
							</a>
							<!-- QUICK VIEW POPUP -->
							<div id="qv-p12" class="product-quick-view mfp-with-anim mfp-hide">
								<!-- PRODUCT PICTURES -->
								<div class="product-pictures">
									<div class="product-photo">
										<figure class="liquid">
											<img src="images/items/34.png" alt="product-image">
										</figure>
									</div>
									<ul class="picture-views">
										<!-- VIEW -->
										<li class="selected">
											<figure class="liquid">
												<img src="images/items/34.png" alt="picture-view">
											</figure>
										</li>
										<!-- /VIEW -->
									</ul>
								</div>
								<!-- /PRODUCT PICTURES -->

								<!-- PRODUCT DESCRIPTION -->
								<div class="product-description">
									<a href="#"><p class="highlighted category">Phone Cases</p></a>
									<a href="#"><h6>Dial Z For Zombie</h6></a>
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
									<p class="highlighted current">$26.00</p>
									<h5 class="stock">Availability: <span class="available">In Stock</span></h5>
									<h5>Select Size:</h5>
									<form class="westeros-form">
										<input id="small12" type="radio" name="size" value="small">
										<label for="small12"><span class="radio"><span></span></span>Small</label>

										<input id="medium12" type="radio" name="size" value="medium">
										<label for="medium12"><span class="radio"><span></span></span>Medium</label>

										<input id="large12" type="radio" name="size" value="large" checked>
										<label for="large12"><span class="radio"><span></span></span>Large</label>

										<input id="extralarge12" type="radio" name="size" value="extralarge">
										<label for="extralarge12"><span class="radio"><span></span></span>Extra Large</label>
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
							<a href="#"><p class="highlighted category">Phone Cases</p></a>
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
							<a href="#"><h6>Dial Z For Zombie</h6></a>
						</div>
						<div class="clearfix">
							<p>Lorem ipsum dolor</p>
							<p class="highlighted current">$26.00</p>
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
			</ul>
			<!-- /PRODUCT LIST -->
		</section>
	</div> --}}
	<!-- /PRODUCT SHOWCASE -->

	<!-- INSTITUTIONAL -->
	{{-- <div id="institutional-wrap">
		<section id="institutional">
			<h3 class="title">Why Choose Us?</h3>
			<!-- BULLETS -->
			<ul class="bullets">
				<!-- BULLET -->
				<li>
					<!-- SVG GLOBE -->
					<svg class="svg-globe">
						<use xlink:href="#svg-globe"></use>
					</svg>
					<!-- /SVG GLOBE -->
					<h6>Worldwide Shipping</h6>
					<p>Lorem ipsum dolor sit amet, edurnere erudum consectetur adipisicing elit. Lorem ipsum dol sit amet, edurnere consectetur adipisicing.</p>
				</li>
				<!-- /BULLET -->

				<!-- BULLET -->
				<li>
					<!-- SVG TRUCK -->
					<svg class="svg-truck">
						<use xlink:href="#svg-truck"></use>
					</svg>
					<!-- /SVG TRUCK -->
					<h6>Rush Delivery Option</h6>
					<p>Lorem ipsum dolor sit amet, edurnere erudum consectetur adipisicing elit. Lorem ipsum dol sit amet, edurnere consectetur adipisicing.</p>
				</li>
				<!-- /BULLET -->

				<!-- BULLET -->
				<li>
					<!-- SVG RIBBON -->
					<svg class="svg-ribbon">
						<use xlink:href="#svg-ribbon"></use>
					</svg>
					<!-- /SVG RIBBON -->
					<h6>Top Quality Products</h6>
					<p>Lorem ipsum dolor sit amet, edurnere erudum consectetur adipisicing elit. Lorem ipsum dol sit amet, edurnere consectetur adipisicing.</p>
				</li>
				<!-- /BULLET -->

				<!-- BULLET -->
				<li>
					<!-- SVG PIGGY -->
					<svg class="svg-piggy">
						<use xlink:href="#svg-piggy"></use>
					</svg>
					<!-- /SVG PIGGY -->
					<h6>Money Back Guarantee</h6>
					<p>Lorem ipsum dolor sit amet, edurnere erudum consectetur adipisicing elit. Lorem ipsum dol sit amet, edurnere consectetur adipisicing.</p>
				</li>
				<!-- /BULLET -->

				<!-- BULLET -->
				<li>
					<!-- SVG CUSTOMER SERVICE -->
					<svg class="svg-customer-service">
						<use xlink:href="#svg-customer-service"></use>
					</svg>
					<!-- /SVG CUSTOMER SERVICE -->
					<h6>24/7 Customer Service</h6>
					<p>Lorem ipsum dolor sit amet, edurnere erudum consectetur adipisicing elit. Lorem ipsum dol sit amet, edurnere consectetur adipisicing.</p>
				</li>
				<!-- /BULLET -->

				<!-- BULLET -->
				<li>
					<!-- SVG CHAT -->
					<svg class="svg-chat">
						<use xlink:href="#svg-chat"></use>
					</svg>
					<!-- /SVG CHAT -->
					<h6>Live Chat Assistance</h6>
					<p>Lorem ipsum dolor sit amet, edurnere erudum consectetur adipisicing elit. Lorem ipsum dol sit amet, edurnere consectetur adipisicing.</p>
				</li>
				<!-- /BULLET -->
			</ul>
			<!-- /BULLETS -->
		</section>
	</div> --}}
	<!-- /INSTITUTIONAL -->

	<!-- LATEST BLOG POSTS -->
	{{-- <div id="latest-blog-posts-wrap">
		<section id="latest-blog-posts">
			<h3 class="title">Latest Blog Posts</h3>
			<div class="slidable">
				<!-- SLIDE CONTROLS -->
				<ul class="slide-controls">
					<!-- LEFT CONTROL -->
					<li>
						<a href="#" class="button prev">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
					<!-- /LEFT CONTROL -->

					<!-- RIGHT CONTROL -->
					<li>
						<a href="#" class="button next">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
					<!-- /RIGHT CONTROL -->
				</ul>
				<!-- /SLIDE CONTROLS -->

				<!-- BLOG POST PREVIEW -->
				<ul id="owl-blog-posts" class="blog-post-preview grid owl-carousel">
					<!-- POST ITEM -->
					<li class="list-item">
						<a href="post.html">
							<figure>
								<img src="images/blog/post1.jpg" alt="post1">
							</figure>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 24th Jul 2015</p>
							<a href="post.html"><h6>The New Tendence</h6></a>
							<p>Lorem ipsum dolor sit amet,sectetur latid adipisicing elit, sed do eiusmoda tempor edne incididunt ut labore adim dolore magna aliqua. Lorem um dolor sit amet, cing de elit, sed do mo ran sed do eiusmod tempor ednerem dunt ut labore et adim dolore.</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								5385
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								532
							</p>
							<a href="post.html">Read more...</a>
						</div>
					</li>
					<!-- /POST ITEM -->

					<!-- POST ITEM -->
					<li class="list-item">
						<a href="post.html">
							<figure>
								<img src="images/blog/post2.jpg" alt="post2">
							</figure>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 9th Jul 2015</p>
							<a href="post.html"><h6>Livestream Painting</h6></a>
							<p>Lorem ipsum dolor sit amet,sectetur latid adipisicing elit, sed do eiusmoda tempor edne incididunt ut labore adim dolore magna aliqua. Lorem um dolor sit amet, cing de elit, sed do mo ran sed do eiusmod tempor ednerem dunt ut labore et adim dolore.</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								2453
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								197
							</p>
							<a href="post.html">Read more...</a>
						</div>
					</li>
					<!-- /POST ITEM -->

					<!-- POST ITEM -->
					<li class="list-item">
						<a href="post.html">
							<figure>
								<img src="images/blog/post3.jpg" alt="post3">
							</figure>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 30th Jun 2015</p>
							<a href="post.html"><h6>Relaxing At Work</h6></a>
							<p>Lorem ipsum dolor sit amet,sectetur latid adipisicing elit, sed do eiusmoda tempor edne incididunt ut labore adim dolore magna aliqua. Lorem um dolor sit amet, cing de elit, sed do mo ran sed do eiusmod tempor ednerem dunt ut labore et adim dolore.</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								2365
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								168
							</p>
							<a href="post.html">Read more...</a>
						</div>
					</li>
					<!-- /POST ITEM -->

					<!-- POST ITEM -->
					<li class="list-item">
						<a href="post.html">
							<figure>
								<img src="images/blog/post4.jpg" alt="post4">
							</figure>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 14th Jun 2015</p>
							<a href="post.html"><h6>Drawing Techniques</h6></a>
							<p>Lorem ipsum dolor sit amet,sectetur latid adipisicing elit, sed do eiusmoda tempor edne incididunt ut labore adim dolore magna aliqua. Lorem um dolor sit amet, cing de elit, sed do mo ran sed do eiusmod tempor ednerem dunt ut labore et adim dolore.</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								4532
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								360
							</p>
							<a href="post.html">Read more...</a>
						</div>
					</li>
					<!-- /POST ITEM -->

					<!-- POST ITEM -->
					<li class="list-item">
						<a href="post.html">
							<figure>
								<img src="images/blog/post1.jpg" alt="post1">
							</figure>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 24th Jul 2015</p>
							<a href="post.html"><h6>The New Tendence</h6></a>
							<p>Lorem ipsum dolor sit amet,sectetur latid adipisicing elit, sed do eiusmoda tempor edne incididunt ut labore adim dolore magna aliqua. Lorem um dolor sit amet, cing de elit, sed do mo ran sed do eiusmod tempor ednerem dunt ut labore et adim dolore.</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								5385
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								532
							</p>
							<a href="post.html">Read more...</a>
						</div>
					</li>
					<!-- /POST ITEM -->

					<!-- POST ITEM -->
					<li class="list-item">
						<a href="post.html">
							<figure>
								<img src="images/blog/post2.jpg" alt="post2">
							</figure>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 9th Jul 2015</p>
							<a href="post.html"><h6>Livestream Painting</h6></a>
							<p>Lorem ipsum dolor sit amet,sectetur latid adipisicing elit, sed do eiusmoda tempor edne incididunt ut labore adim dolore magna aliqua. Lorem um dolor sit amet, cing de elit, sed do mo ran sed do eiusmod tempor ednerem dunt ut labore et adim dolore.</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								2453
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								197</p>
							<a href="post.html">Read more...</a>
						</div>
					</li>
					<!-- /POST ITEM -->
				</ul>
				<!-- /BLOG POST PREVIEW -->
			</div>
		</section>
	</div> --}}
	<!-- /LATEST BLOG POSTS -->

	<!-- BILLBOARD -->
	{{-- <div id="billboard-wrap">
		<section id="billboard">
			<h3 class="title">Westeros Billboard</h3>
			<!-- ACCORDION -->
			<ul class="accordion">
				<!--ACCORDION ITEM-->
				<li>
					<a href="#">
						<h6>What's Westeros?</h6>
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
					</a>
					<ul class="sub-items">
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod tempor er edne incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem mud ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod.</p>
						</li>
					</ul>
				</li>
				<!--/ACCORDION ITEM-->

				<!--ACCORDION ITEM-->
				<li>
					<a href="#">
						<h6>Creating an account</h6>
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
					</a>
					<ul class="sub-items">
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod tempor er edne incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem mud ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod.</p>
						</li>
					</ul>
				</li>
				<!--/ACCORDION ITEM-->

				<!--ACCORDION ITEM-->
				<li>
					<a href="#">
						<h6>How to buy our products</h6>
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
					</a>
					<ul class="sub-items">
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod tempor er edne incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem mud ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod.</p>
						</li>
					</ul>
				</li>
				<!--/ACCORDION ITEM-->

				<!--ACCORDION ITEM-->
				<li>
					<a href="#">
						<h6>Delivery and Payment</h6>
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
					</a>
					<ul class="sub-items">
						<li>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod tempor er edne incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem mud ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod.</p>
						</li>
					</ul>
				</li>
				<!--/ACCORDION ITEM-->
			</ul>
			<!-- /ACCORDION -->

			<div class="sale-promo">
				<div class="speech-bubble">
					<h4>Next week is the</h4>
					<h4 class="remark">Spring Sale!</h4>
				</div>
				<img src="images/bunny-monster.png" alt="bunny-monster">
				<div id="bubbles">
					<div class="bubble small"></div>
					<div class="bubble small x1"></div>
					<div class="bubble medium"></div>
					<div class="bubble large"></div>
				</div>
			</div>
		</section>
	</div> --}}
	<!-- /BILLBOARD -->

	<!-- BRANDS -->
	{{-- <div id="brands-wrap">
		<section id="brands">
			<h3 class="title">Our Brands</h3>
			<div class="slidable">
				<!-- SLIDE CONTROLS -->
				<ul class="slide-controls">
					<!-- LEFT CONTROL -->
					<li>
						<a href="#" class="button prev">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
					<!-- /LEFT CONTROL -->

					<!-- RIGHT CONTROL -->
					<li>
						<a href="#" class="button next">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
					<!-- /RIGHT CONTROL -->
				</ul>
				<!-- /SLIDE CONTROLS -->

				<!-- BRANDS LIST -->
				<ul id="owl-brands" class="brands-list owl-carousel">
					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/gr.png" alt="brand-normal">
							<img src="images/brands/gr-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->

					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/tf.png" alt="brand-normal">
							<img src="images/brands/tf-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->

					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/aj.png" alt="brand-normal">
							<img src="images/brands/aj-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->

					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/vh.png" alt="brand-normal">
							<img src="images/brands/vh-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->

					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/pd.png" alt="brand-normal">
							<img src="images/brands/pd-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->

					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/gr.png" alt="brand-normal">
							<img src="images/brands/gr-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->

					<!-- BRAND -->
					<li>
						<a href="#">
							<img src="images/brands/tf.png" alt="brand-normal">
							<img src="images/brands/tf-over.png" alt="brand-over">
						</a>
					</li>
					<!-- /BRAND -->
				</ul>
				<!-- /BRANDS LIST -->
			</div>
		</section>
	</div> --}}
	<!-- /BRANDS -->
@endsection
@section('custom-scripts')
<script>
    // Khai báo controller `contactController`
    app.controller('contactController', function($scope, $http) {
        // hàm submit form sau khi đã kiểm tra các ràng buộc (validate)
        $scope.submitContactForm = function() {
            // kiểm tra các ràng buộc là hợp lệ, gởi AJAX đến action 
            if ($scope.contactForm.$valid) {
                // lấy data của Form
                var dataInputContactForm = {
                    "name": $scope.contactForm.name.$viewValue
                    ,"email": $scope.contactForm.email.$viewValue
                    , "message": $scope.contactForm.message.$viewValue
                    , "_token": "{{ csrf_token() }}"
                , };

                // sử dụng service $http của AngularJS để gởi request POST đến route `frontend.contact.sendMailContactForm`
                $http({
                    url: "{{ route('frontend.pages.contact.sendMail') }}"
                    , method: "POST"
                    , data: JSON.stringify(dataInputContactForm)
                }).then(function successCallback(response) {
                    // Gởi mail thành công, thông báo cho khách hàng biết
                    Swal.fire('Gởi mail thành công!', 'Chúng tôi sẽ trả lời Quý khách trong thời gian sớm nhất. Xin cám ơn!', 'success');

                }, function errorCallback(response) {
                    // Gởi mail không thành công, thông báo lỗi cho khách hàng biết
                    Swal.fire('Có lỗi trong quá trình gởi mail!', 'Vui lòng thử lại sau vài phút.', 'error');
                    console.log(response);
                });
            }
        };
    });

</script>
@endsection
