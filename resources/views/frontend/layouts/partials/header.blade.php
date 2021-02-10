<!-- HEADER -->
<header>
    <div id="header-top-wrap">
        <!-- HEADER TOP -->
        <section id="header-top" class="clearfix">
            <p class="contact">
                Questions? Do you need help? Send us an email to:
                <a href="mailto:questions@westeroscc.com">questions@westeroscc.com</a>
            </p>
            <!-- WESTEROS DROPDOWN CONTAINER-->
            <div class="westeros-dropdown-container small">
                <p>
                    <span><a href="">Language</a></span>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow westeros-dropdown-control">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </p>

                <!-- WESTEROS DROPDOWN -->
                <ul class="westeros-dropdown default hide-on-click">
                    <li><a href="{{ route('app.setLocale', ['locale' => 'vi']) }}">Vietnamese</a></li>
                    <li><a href="{{ route('app.setLocale', ['locale' => 'en']) }}">English</a></li>
                    <li><a>French</a></li>
                    <li><a>German</a></li>
                </ul>
                <!-- /WESTEROS DROPDOWN -->
            </div>
            <!-- /WESTEROS DROPDOWN CONTAINER-->

            <!-- WESTEROS DROPDOWN CONTAINER-->
            <div class="westeros-dropdown-container small">
                <p>
                    <span>USD</span>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow westeros-dropdown-control">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </p>

                <!-- WESTEROS DROPDOWN -->
                <ul class="westeros-dropdown default hide-on-click">
                    <li class="selected"><a>USD</a></li>
                    <li><a>EURO</a></li>
                    <li><a>PESOS</a></li>
                </ul>
                <!-- /WESTEROS DROPDOWN -->
            </div>
            <!-- /WESTEROS DROPDOWN CONTAINER-->
            @if(session()->has('data'))
            <!-- WESTEROS DROPDOWN CONTAINER-->
            <div class="westeros-dropdown-container">
                <p class="login logged">
                    <!-- SVG LOGGED -->
                    <svg class="svg-logged">
                        <use xlink:href="#svg-logged"></use>
                    </svg>
                    <!-- /SVG LOGGED -->
                    Welcome Back
                    <a href="profile">{{session('data')['kh_email']}}</a>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow westeros-dropdown-control">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </p>
                <!-- WESTEROS DROPDOWN -->
                <ul class="westeros-dropdown default hide-on-click">
                    <li>
                        <a href="profile">
                            <!-- SVG GEAR -->
                            <svg class="svg-gear">
                                <use xlink:href="#svg-gear"></use>
                            </svg>
                            <!-- /SVG GEAR -->
                            Your Account
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html">
                            <!-- SVG WISHLIST -->
                            <svg class="svg-wishlist">
                                <use xlink:href="#svg-wishlist"></use>
                            </svg>
                            <!-- /SVG WISHLIST -->
                            Your Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="compare.html">
                            <!-- SVG COMPARE -->
                            <svg class="svg-compare">
                                <use xlink:href="#svg-compare"></use>
                            </svg>
                            <!-- /SVG COMPARE -->
                            Compare
                        </a>
                    </li>
                    <li>
                        <a href="gio-hang">
                            <!-- SVG CART -->
                            <svg class="svg-cart">
                                <use xlink:href="#svg-cart"></use>
                            </svg>
                            <!-- /SVG CART -->
                            Your Order
                        </a>
                    </li>
                    <li>
                        <a href="dang-xuat">
                            <!-- SVG CART -->
                            <svg class="svg-cart">
                                <use xlink:href="#svg-cart"></use>
                            </svg>
                            <!-- /SVG CART -->
                            Logout
                        </a>
                    </li>
                </ul>
                <!-- /WESTEROS DROPDOWN -->
            </div>
            <!-- /WESTEROS DROPDOWN CONTAINER-->
            @else
            <p class="login">
                Welcome visitor, if you have an account
                <a href="xac-thuc">Login</a>, or
                <a href="xac-thuc">Register</a>
            </p>
            @endif

            


        </section>
        <!-- /HEADER TOP -->
    </div>

    <div id="header-bottom-wrap">
        <!-- HEADER BOTTOM -->
        <section id="header-bottom">
            <!-- LOGO -->
            <div class="logo-container">
                <a href="index.html">
                    <figure class="logo">
                        <img src="{{ asset('themes/westeros/images/logo.png')}}" alt="logo">
                        <figcaption>Westeros</figcaption>
                    </figure>
                </a>
            </div>
            <!-- /LOGO -->
            <form class="westeros-form">
                <label for="categories" class="select-block">
                    <select name="categories" id="categories">
                        <option value="0">All Categories</option>
                        <option value="1">T-Shirts</option>
                        <option value="2">Pin Badges</option>
                        <option value="3">Custom Sneakers</option>
                        <option value="4">Phone Cases</option>
                    </select>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow select-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </label>
                <input type="text" name="search" id="search" placeholder="Search Our Catalog...">
                <input type="image" src="{{ asset('themes/westeros/images/icons/search-icon.png')}}" alt="search-icon">
            </form>

            <!-- WESTEROS DROPDOWN CONTAINER-->
            <div class="westeros-dropdown-container">

                <!-- CART CONTROL -->
                <div class="cart-control westeros-dropdown-control">
                    <ngcart-summary class="js-show-cart highlighted" template-url="{{ asset('vendor/ngCart/template/ngCart/summary.html') }}"></ngcart-summary>
                </div>
                <!-- /CART CONTROL -->
                <!-- CART -->
                <ngcart-cart template-url="{{ asset('vendor/ngCart/template/ngCart/sidebar-cart.html') }}"></ngcart-cart>
                <!-- /CART -->
            </div>
            <!-- /WESTEROS DROPDOWN CONTAINER -->
        </section>
        <!-- /HEADER BOTTOM -->
    </div>

    <!-- WESTEROS SEPARATOR -->
    <ul class="westeros-separator small">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <!-- /WESTEROS SEPARATOR -->
</header>
<!-- /HEADER -->
