@extends('frontend.westeros.layouts.master')

@section('title')
Contact
@endsection
@section('main')
Home /
@endsection

@section('sub')
Blog
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
                    <a href="#">
                        <h6>Print Design</h6>
                    </a>
                </li>
                <!--/ACCORDION ITEM-->

                <!--ACCORDION ITEM-->
                <li>
                    <a href="#">
                        <h6>Latest Trends</h6>
                        <svg class="plus">
                            <rect class="vertical" x="3" width="3" height="9" />
                            <rect y="3" width="9" height="3" />
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
                    <a href="#">
                        <h6>Diy Tutorials</h6>
                    </a>
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
                                <img src="{{ asset('themes/westeros/images/blog/post1.jpg')}}" alt="post1">
                            </figure>
                        </div>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 24th Jul 2015</p>
                        <a href="post.html">
                            <h6>The New Tendence</h6>
                        </a>
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
                                <img src="{{ asset('themes/westeros/images/blog/post2.jpg')}}" alt="post1">
                            </figure>
                        </div>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 28th Apr 2015</p>
                        <a href="post.html">
                            <h6>Music For The Eyes</h6>
                        </a>
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
                                <img src="{{ asset('themes/westeros/images/blog/post3.jpg')}}" alt="post1">
                            </figure>
                        </div>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 14th Jun 2015</p>
                        <a href="post.html">
                            <h6>Drawing Techniques</h6>
                        </a>
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
                                <img src="{{ asset('themes/westeros/images/blog/post4.jpg')}}" alt="post1">
                            </figure>
                        </div>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 16th May 2015</p>
                        <a href="post.html">
                            <h6>City Touring</h6>
                        </a>
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
                                <img src="{{ asset('themes/westeros/images/items/02.png')}}" alt="product1">
                            </figure>
                        </div>
                    </a>
                    <a href="women-shop.html">
                        <p class="highlighted category">T-Shirts</p>
                    </a>
                    <a href="full-view.html">
                        <h6>Crazy Bunny</h6>
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
                    <p class="highlighted current">$86.00</p>
                </li>

                <li>
                    <a href="full-view.html">
                        <div class="picture">
                            <figure class="liquid">
                                <img src="{{ asset('themes/westeros/images/items/25.png')}}" alt="product2">
                            </figure>
                        </div>
                    </a>
                    <a href="women-shop.html">
                        <p class="highlighted category">T-Shirts</p>
                    </a>
                    <a href="full-view.html">
                        <h6>Happy Doughnut</h6>
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
                    <p class="highlighted current">$49.00</p>
                    <p class="highlighted previous">$61.25</p>
                </li>

                <li>
                    <a href="full-view.html">
                        <div class="picture">
                            <figure class="liquid">
                                <img src="{{ asset('themes/westeros/images/items/32.png')}}" alt="product3">
                            </figure>
                        </div>
                    </a>
                    <a href="women-shop.html">
                        <p class="highlighted category">Custom Sneakers</p>
                    </a>
                    <a href="full-view.html">
                        <h6>The Devil Walks</h6>
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
                    <p class="highlighted current">$43.00</p>
                </li>

                <li>
                    <a href="full-view.html">
                        <div class="picture">
                            <figure class="liquid">
                                <img src="{{ asset('themes/westeros/images/items/16.png')}}" alt="product1">
                            </figure>
                        </div>
                    </a>
                    <a href="men-shop.html">
                        <p class="highlighted category">T-Shirts</p>
                    </a>
                    <a href="full-view.html">
                        <h6>The Devil Pin 02</h6>
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
                    <p class="highlighted current">$54.00</p>
                </li>
            </ul>
            <!-- /PRODUCT PREVIEW -->
        </aside>
        <!-- /SHOP SIDEBAR -->

        <!-- SHOP PRODUCTS -->
        <div class="shop-products">
            <h3 class="title">Westeros Blog</h3>
            <!-- FILTERS -->
            <div class="filters">
                <h3 class="subtitle">Posts 1 to 9 out of 213 total</h3>
                <div class="options">
                    <form class="westeros-form">
                        <label class="select-block" for="show">Show:
                            <select name="show" id="show">
                                <option value="1">9 Per Page</option>
                                <option value="2">15 Per Page</option>
                            </select>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow select-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </label>
                        <label class="select-block" for="sort">Sort by:
                            <select name="sort" id="sort">
                                <option value="1">Date (Descending)</option>
                                <option value="2">Date (Ascending)</option>
                            </select>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow select-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </label>
                    </form>
                    <!-- VIEW DISPLAY -->
                    <ul class="display">
                        <li class="grid selected">
                            <!-- SVG GRID -->
                            <svg class="svg-grid">
                                <use xlink:href="#svg-grid"></use>
                            </svg>
                            <!-- /SVG GRID -->
                        </li>
                        <li class="list">
                            <!-- SVG LIST -->
                            <svg class="svg-list">
                                <use xlink:href="#svg-list"></use>
                            </svg>
                            <!-- /SVG LIST -->
                        </li>
                    </ul>
                    <!-- /VIEW DISPLAY -->
                </div>
            </div>
            <!-- /FILTERS -->

            <!-- BLOG POST PREVIEW -->
            <ul class="blog-post-preview grid">
                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post1.jpg')}}" alt="post1">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 24th Jul 2015</p>
                        <a href="post.html">
                            <h6>The New Tendence</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post2.jpg')}}" alt="post2">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 9th Jul 2015</p>
                        <a href="post.html">
                            <h6>Livestream Painting</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post3.jpg')}}" alt="post3">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 30th Jun 2015</p>
                        <a href="post.html">
                            <h6>Relaxing At Work</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post4.jpg')}}" alt="post4">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 14th Jun 2015</p>
                        <a href="post.html">
                            <h6>Drawing Techniques</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post1.jpg')}}" alt="post1">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 24th Jul 2015</p>
                        <a href="post.html">
                            <h6>The New Tendence</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post2.jpg')}}" alt="post2">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 9th Jul 2015</p>
                        <a href="post.html">
                            <h6>Livestream Painting</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post1.jpg')}}" alt="post1">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 24th Jul 2015</p>
                        <a href="post.html">
                            <h6>The New Tendence</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post2.jpg')}}" alt="post2">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 9th Jul 2015</p>
                        <a href="post.html">
                            <h6>Livestream Painting</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->

                <!-- POST ITEM -->
                <li class="list-item">
                    <a href="post.html">
                        <figure class="liquid">
                            <img src="{{ asset('themes/westeros/images/blog/post3.jpg')}}" alt="post3">
                        </figure>
                    </a>
                    <div class="content">
                        <p class="highlighted">Admin | 30th Jun 2015</p>
                        <a href="post.html">
                            <h6>Relaxing At Work</h6>
                        </a>
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
                        <a href="#">Read more...</a>
                    </div>
                </li>
                <!-- /POST ITEM -->
            </ul>
            <!-- /BLOG POST PREVIEW -->

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
                <li><a href="#">12</a></li>
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
        </div>
        <!-- /SHOP PRODUCTS -->
        <div class="clearfix"></div>
    </section>
</div>
<!-- /SHOP -->
@endsection
@section('custom-scripts')

@endsection
