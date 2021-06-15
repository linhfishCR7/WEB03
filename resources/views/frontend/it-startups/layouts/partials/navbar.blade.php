        <div class="navbar-area">
            <div class="evolta-responsive-nav">
                <div class="container">
                    <div class="evolta-responsive-menu">
                        <div class="logo">
                            <a href="index">
                                <img src="{{ asset('themes/it-startups/assets/img/black-logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="@yield('class')">
                <div class="@yield('subclass')">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index">
                            <img src="{{ asset('themes/it-startups/assets/img/black-logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="index" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item"><a href="about" class="nav-link">About Us</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item"><a href="team" class="nav-link">Team</a></li>

                                        <li class="nav-item"><a href="service" class="nav-link">Services</a>
                                        </li>

                                        <li class="nav-item"><a href="shop" class="nav-link">Shop</a>
                                            <ul class="dropdown-menu">

                                                <li class="nav-item"><a href="cart" class="nav-link">Cart</a></li>

                                                <li class="nav-item"><a href="checkout" class="nav-link">Checkout</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item"><a href="blog" class="nav-link">Blog</a>
                                        </li>

                                        <li class="nav-item"><a href="faq" class="nav-link">FAQ</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="project" class="nav-link">Projects <i class="fas fa-chevron-down"></i></a>
                                </li>

                                <li class="nav-item"><a href="shop" class="nav-link">Shop <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="cart" class="nav-link">Cart</a></li>

                                        <li class="nav-item"><a href="checkout" class="nav-link">Checkout</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-options">
                                <a href="cart" class="cart-btn"><i class="flaticon-shopping-basket"></i><ngcart-summary class="js-show-cart highlighted" template-url="{{ asset('vendor/ngCart/template/ngCart/summary.html') }}"></ngcart-summary></a>
                                <div class="option-item"><i class="search-btn flaticon-search"></i>
                                    <i class="close-btn fas fa-times"></i>
                                    
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search" type="text">

                                                <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <a href="contact.html" class="btn btn-primary">Free Quote</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>