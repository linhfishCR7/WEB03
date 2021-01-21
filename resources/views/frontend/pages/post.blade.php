@extends('frontend.layouts.master')

@section('title')
Contact
@endsection
@section('main')
Home /
@endsection

@section('sub')
Blog / {{}}
@endsection

@section('custom-css')
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
			<aside class="shop-sidebar">
				<!-- SIDEBAR CONTROL -->
				<svg class="svg-plus sidebar-control">
					<use xlink:href="#svg-plus"></use>
				</svg>
				<!-- /SIDEBAR CONTROL -->
				
				<h3 class="title">Categories</h3>
				<!-- ACCORDION -->
				<ul class="accordion">
					<!--ACCORDION ITEM-->
					<li>
						<a href="#"><h6>Print Design</h6></a>
					</li>
					<!--/ACCORDION ITEM-->

					<!--ACCORDION ITEM-->
					<li>
						<a href="#">
							<h6>Latest Trends</h6>
							<svg class="plus">
								<rect class="vertical" x="3" width="3" height="9"/>
								<rect y="3" width="9" height="3"/>
							</svg>
						</a>
						<ul class="sub-items">
							<li>
								<!-- ITEM LIST -->
								<ul>
									<li>		
										<a href="#">
											<!-- SVG ARROW -->
											<svg class="svg-arrow">
												<use xlink:href="#svg-arrow"></use>
											</svg>
											<!-- /SVG ARROW -->
											Fashion (5)
										</a>
									</li>
									<li>
										<a href="#">
											<!-- SVG ARROW -->
											<svg class="svg-arrow">
												<use xlink:href="#svg-arrow"></use>
											</svg>
											<!-- /SVG ARROW -->
											Collections (9)
										</a>
									</li>							
								</ul>
								<!-- /ITEM LIST -->
							</li>
						</ul>
					</li>
					<!--/ACCORDION ITEM-->

					<!--ACCORDION ITEM-->
					<li>
						<a href="#"><h6>Diy Tutorials</h6></a>
					</li>
					<!--/ACCORDION ITEM-->
				</ul>
				<!-- /ACCORDION -->

				<!-- POPULAR POSTS -->
				<h3 class="title">Popular Posts</h3>
				<ul class="posts-widget">
					<!-- POSTW-ITEM -->
					<li>
						<a href="post.html">
							<div class="post-picture">
								<figure class="liquid">
									<img src="images/blog/post1.jpg" alt="post1">
								</figure>
							</div>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 24th Jul 2015</p>
							<a href="post.html"><h6>The New Tendence</h6></a>
							<p>Lorem ipsum dolor sit amet, con...</p>
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
						</div>
					</li>
					<!-- /POSTW-ITEM -->

					<!-- POSTW-ITEM -->
					<li>
						<a href="post.html">
							<div class="post-picture">
								<figure class="liquid">
									<img src="images/blog/post2.jpg" alt="post1">
								</figure>
							</div>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 28th Apr 2015</p>
							<a href="post.html"><h6>Music For The Eyes</h6></a>
							<p>Lorem ipsum dolor sit amet, con...</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								5352
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								423
							</p>
						</div>
					</li>
					<!-- /POSTW-ITEM -->

					<!-- POSTW-ITEM -->
					<li>
						<a href="post.html">
							<div class="post-picture">
								<figure class="liquid">
									<img src="images/blog/post3.jpg" alt="post1">
								</figure>
							</div>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 14th Jun 2015</p>
							<a href="post.html"><h6>Drawing Techniques</h6></a>
							<p>Lorem ipsum dolor sit amet, con...</p>
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
						</div>
					</li>
					<!-- /POSTW-ITEM -->

					<!-- POSTW-ITEM -->
					<li>
						<a href="post.html">
							<div class="post-picture">
								<figure class="liquid">
									<img src="images/blog/post4.jpg" alt="post1">
								</figure>
							</div>
						</a>
						<div class="content">
							<p class="highlighted">Admin | 16th May 2015</p>
							<a href="post.html"><h6>City Touring</h6></a>
							<p>Lorem ipsum dolor sit amet, con...</p>
						</div>
						<div class="actions">
							<p class="views">
								<!-- SVG QUICKVIEW -->
								<svg class="svg-quickview">
									<use xlink:href="#svg-quickview"></use>
								</svg>
								<!-- /SVG QUICKVIEW -->
								5536
							</p>
							<p class="comments">
								<!-- SVG COMMENT -->
								<svg class="svg-comment">
									<use xlink:href="#svg-comment"></use>
								</svg>
								<!-- /SVG COMMENT -->
								385
							</p>
						</div>
					</li>
					<!-- /POSTW-ITEM -->
				</ul>
				<!-- /POPULAR POSTS -->

				<!-- TAG CLOUD -->
				<h3 class="title">Tag Cloud</h3>
				<ul class="tags">
					<li><a href="#">Custom</a></li>
					<li><a href="#">Monsters</a></li>
					<li><a href="#">Large</a></li>
					<li><a href="#">Halloween</a></li>
					<li><a href="#">Sale</a></li>
					<li><a href="#">Small</a></li>
					<li><a href="#">Medium</a></li>
					<li><a href="#">Cute</a></li>
				</ul>
				<!-- /TAG CLOUD -->

				<h3 class="title">Featured Items</h3>
				<!-- PRODUCT PREVIEW -->
				<ul class="product-preview">
					<li>
						<a href="full-view.html">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/02.png" alt="product1">
								</figure>
							</div>
						</a>
						<a href="women-shop.html"><p class="highlighted category">T-Shirts</p></a>
						<a href="full-view.html"><h6>Crazy Bunny</h6></a>
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
						<p class="highlighted current">$86.00</p>
					</li>

					<li>
						<a href="full-view.html">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/25.png" alt="product2">
								</figure>
							</div>
						</a>
						<a href="women-shop.html"><p class="highlighted category">T-Shirts</p></a>
						<a href="full-view.html"><h6>Happy Doughnut</h6></a>
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
						<p class="highlighted current">$49.00</p>
						<p class="highlighted previous">$61.25</p>
					</li>

					<li>
						<a href="full-view.html">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/32.png" alt="product3">
								</figure>
							</div>
						</a>
						<a href="women-shop.html"><p class="highlighted category">Custom Sneakers</p></a>
						<a href="full-view.html"><h6>The Devil Walks</h6></a>
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
						<p class="highlighted current">$43.00</p>
					</li>

					<li>
						<a href="full-view.html">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/16.png" alt="product1">
								</figure>
							</div>
						</a>
						<a href="men-shop.html"><p class="highlighted category">T-Shirts</p></a>
						<a href="full-view.html"><h6>The Devil Pin 02</h6></a>
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
						<p class="highlighted current">$54.00</p>
					</li>
				</ul>
				<!-- /PRODUCT PREVIEW -->
			</aside>
			<!-- /SHOP SIDEBAR -->

			<!-- SHOP PRODUCTS -->
			<div class="shop-products">
				<h3 class="title">Westeros Blog</h3>
				<!-- BLOG POST -->
				<article class="blog-post">
					<figure class="liquid">
						<img src="images/blog/post-open.jpg" alt="post-img">
					</figure>
					<!-- CONTENT -->
					<div class="content">
						<p class="highlighted">Admin | 14th Jun 2015</p>
						<h5>Drawing Techniques</h5>
						<div class="meta">
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
						</div>
						<p class="paragraph">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim eru dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
						<p class="paragraph">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna e aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim erudi dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut ater labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do.</p>
						<p class="paragraph">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna e aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim erudi dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut ater labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit.</p>
						<img src="images/blog/post-img1.jpg" alt="inner-img" class="left">
						<h6>Learning New Techniques</h6>
						<p class="paragraph with-img">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna e aliqua. Lorem ipsum edu dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran temporatu edne incididunt ut labore et adim erudi dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne rel incididunt ut ater labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit.</p>
						<p class="paragraph">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim eru dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
						<h6>Tutorial For Faces and Hair</h6>
						<iframe src="https://player.vimeo.com/video/153688163" allowfullscreen></iframe>
						<!--<iframe src="https://player.vimeo.com/video/109558222" allowfullscreen></iframe>-->
						<h6>Final Touches To The Project</h6>
						<p class="paragraph">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim eru dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
						<p class="paragraph">Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim eru dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
					</div>
					<!-- /CONTENT -->

					<!-- SHARE -->
					<div class="share">
						<h6>Share This Post:</h6>
						<a href="#" class="button medium fb"></a>
						<a href="#" class="button medium twt"></a>
						<a href="#" class="button medium gplus"></a>
						<a href="#" class="button medium rss"></a>
						<a href="#" class="button medium dribble"></a>
						<a href="#" class="button medium vimeo"></a>
						<a href="#" class="button medium flickr"></a>
					</div>
					<!-- /SHARE -->

					<!-- TAG LIST -->
					<div class="tag-list">
						<h6>Tags:</h6>
						<ul class="tags">
							<li><a href="#">Custom</a></li>
							<li><a href="#">Monsters</a></li>
							<li><a href="#">Large</a></li>
							<li><a href="#">Halloween</a></li>
							<li><a href="#">Sale</a></li>
							<li><a href="#">Small</a></li>
							<li><a href="#">Medium</a></li>
							<li><a href="#">Cute</a></li>
						</ul>
					</div>
					<!-- /TAG LIST -->
				</article>
				<!-- /BLOG POST -->

				<!-- COMMENTS -->
				<article class="comments">
					<h3 class="title">Comments (197)</h3>
					<!-- COMMENT LIST -->
					<ul class="comment-list">
						<!-- COMMENT -->
						<li>
							<!-- AVATAR -->
							<div class="avatar">
								<figure class="liquid">
									<img src="images/blog/avatar01.jpg" alt="avatar-img">
								</figure>
							</div>
							<!-- /AVATAR -->
							<p class="highlighted">9th Jul 2015 at 11:20</p>
							<h6>Robert Envato</h6>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore rend adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua.</p>
							<a href="#" class="reply">
								<!-- SVG REPLY -->
								<svg class="svg-reply">
									<use xlink:href="#svg-reply"></use>	
								</svg>
								<!-- /SVG REPLY -->
								Reply
							</a>
						</li>
						<!-- /COMMENT -->

						<!-- COMMENT -->
						<li>
							<!-- AVATAR -->
							<div class="avatar">
								<figure class="liquid">
									<img src="images/blog/avatar02.jpg" alt="avatar-img">
								</figure>
							</div>
							<!-- /AVATAR -->
							<p class="highlighted">9th Jul 2015 at 10:46</p>
							<h6>Jennifer Thompson</h6>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore rend adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua.</p>
							<a href="#" class="reply">
								<!-- SVG REPLY -->
								<svg class="svg-reply">
									<use xlink:href="#svg-reply"></use>	
								</svg>
								<!-- /SVG REPLY -->
								Reply
							</a>
						</li>
						<!-- /COMMENT -->

						<!-- COMMENT -->
						<li class="response">
							<!-- AVATAR -->
							<div class="avatar">
								<figure class="liquid">
									<img src="images/blog/avatar03.jpg" alt="avatar-img">
								</figure>
							</div>
							<!-- /AVATAR -->
							<p class="highlighted">9th Jul 2015 at 12:15</p>
							<h6>Marty Stranfield</h6>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore rend adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua.</p>
							<a href="#" class="reply">
								<!-- SVG REPLY -->
								<svg class="svg-reply">
									<use xlink:href="#svg-reply"></use>	
								</svg>
								<!-- /SVG REPLY -->
								Reply
							</a>
						</li>
						<!-- /COMMENT -->

						<!-- COMMENT -->
						<li>
							<!-- AVATAR -->
							<div class="avatar">
								<figure class="liquid">
									<img src="images/blog/avatar04.jpg" alt="avatar-img">
								</figure>
							</div>
							<!-- /AVATAR -->
							<p class="highlighted">9th Jul 2015 at 09:21</p>
							<h6>Default Avatar 01</h6>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore rend adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua.</p>
							<a href="#" class="reply">
								<!-- SVG REPLY -->
								<svg class="svg-reply">
									<use xlink:href="#svg-reply"></use>	
								</svg>
								<!-- /SVG REPLY -->
								Reply
							</a>
						</li>
						<!-- /COMMENT -->

						<!-- COMMENT -->
						<li>
							<!-- AVATAR -->
							<div class="avatar">
								<figure class="liquid">
									<img src="images/blog/avatar05.jpg" alt="avatar-img">
								</figure>
							</div>
							<!-- /AVATAR -->
							<p class="highlighted">9th Jul 2015 at 09:06</p>
							<h6>Default Avatar 02</h6>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore rend adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua.</p>
							<a href="#" class="reply">
								<!-- SVG REPLY -->
								<svg class="svg-reply">
									<use xlink:href="#svg-reply"></use>	
								</svg>
								<!-- /SVG REPLY -->
								Reply
							</a>
						</li>
						<!-- /COMMENT -->

						<!-- COMMENT -->
						<li>
							<!-- AVATAR -->
							<div class="avatar">
								<figure class="liquid">
									<img src="images/blog/avatar06.jpg" alt="avatar-img">
								</figure>
							</div>
							<!-- /AVATAR -->
							<p class="highlighted">9th Jul 2015 at 09:21</p>
							<h6>Default Avatar 03</h6>
							<p>Lorem ipsum dolor sit amet, consectetur latid adipisicing elit, sed do eiusmod ran tempor edne incididunt ut labore rend adim dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur latid adipisicing de elit, sed do eiusmod ran tempor edne incididunt ut labore et adim dolore magna aliqua.</p>
							<a href="#" class="reply">
								<!-- SVG REPLY -->
								<svg class="svg-reply">
									<use xlink:href="#svg-reply"></use>	
								</svg>
								<!-- /SVG REPLY -->
								Reply
							</a>
						</li>
						<!-- /COMMENT -->
					</ul>
					<!-- /COMMENT LIST -->
				</article>
				<!-- COMMENTS -->

				<!-- PAGER -->
				<ul class="pager">
					<li>
						<a href="#" class="button prev">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
					<li class="selected"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">39</a></li>
					<li>
						<a href="#" class="button next">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
				</ul>
				<!-- /PAGER -->

				<!-- COMMENT FORM -->
				<article class="comment-form">
					<h3 class="title">Leave a Comment</h3>
					<div class="featured-form">
						<form class="westeros-form">
							<div>
								<label for="name" class="rl-label required">Your Name</label>
								<input type="text" id="name" placeholder="Enter your name or nickname here...">
							</div>
							<div>
								<label for="email" class="rl-label required">Your Email</label>
								<input type="text" id="email" placeholder="Enter your email address here...">
							</div>
							<div class="last">
								<label for="website" class="rl-label">Your Website</label>
								<input type="text" id="website" placeholder="Enter your website here...">
							</div>
							<label for="comment" class="rl-label required">Your Comment</label>
							<textarea id="comment" placeholder="Write your comment here..."></textarea>
							
							<!-- AVATAR SELECTION -->
							<div class="avatar-selection">
								<label class="rl-label">Select your avatar:</label>
								<!-- AVATAR LIST -->
								<div class="avatar-list">
									<!-- AVATAR -->
									<input type="radio" id="op1" name="avatar" value="op1" checked>
									<label for="op1">
										<span class="radio"><span></span></span>
										<span class="picture av4"></span>
									</label>
									<!-- /AVATAR -->

									<!-- AVATAR -->
									<input type="radio" id="op2" name="avatar" value="op2">
									<label for="op2">
										<span class="radio"><span></span></span>
										<span class="picture av5"></span>
									</label>
									<!-- /AVATAR -->

									<!-- AVATAR -->
									<input type="radio" id="op3" name="avatar" value="op3">
									<label for="op3">
										<span class="radio"><span></span></span>
										<span class="picture av6"></span>
									</label>
									<!-- /AVATAR -->
								</div>
								<!-- /AVATAR LIST -->
							</div>
							<!-- /AVATAR SELECTION -->
							<button class="button">Post Your Comment</button>
						</form>
					</div>
				</article>
				<!-- /COMMENT FORM -->
			</div>
			<!-- /SHOP PRODUCTS -->
			<div class="clearfix"></div>
		</section>
	</div>
	<!-- /SHOP -->
@endsection
@section('custom-scripts')

@endsection
