<header class="header_section {{ $headerClass }}">
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-md-6">
                    <ul class="header_select_options ul_li">
                        <li>
                            <div class="select_option">
                                <div class="flug_wrap">
                                    <img src="{{ asset('frontend_assets') }}/images/flug/flug_uk.png" alt="image_not_found">
                                </div>
                                <select>
                                    <option data-display="Select Option">Select Your Language</option>
                                    <option value="1" selected="">English</option>
                                    <option value="2">Bangla</option>
                                    <option value="3" disabled="">Arabic</option>
                                    <option value="4">Hebrew</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="select_option">
                                <h3 class="title_text">Currency:</h3>
                                <select>
                                    <option data-display="Select Option">Select Your Currency</option>
                                    <option value="united States Dollar" selected="">USD</option>
                                    <option value="Armenian Dram">AMD</option>
                                    <option value="Australian Dollar" disabled="">AUD</option>
                                    <option value="Austria">EUR</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col col-md-6">
                    <p class="header_hotline">Call us toll free: <strong>+1888 234 5678</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-3 col-md-3 col-sm-12">
                    <div class="brand_logo">
                        <a class="brand_link" href="{{ route('frontend.index') }}">
                            <img src="{{ asset('frontend_assets') }}/images/logo/logo_1x.png" srcset="{{ asset('frontend_assets') }}/images/logo/logo_2x.png 2x" alt="">
                        </a>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <form action="#">
                        <div class="advance_serach">
                            <div class="select_option mb-0 clearfix">
                                <select>
                                    <option data-display="All Categories">Select A Category</option>
                                    <option value="1">New Arrival Products</option>
                                    <option value="2">Most Popular Products</option>
                                    <option value="3">Deals of the day</option>
                                    <option value="4">Mobile Accessories</option>
                                    <option value="5">Computer Accessories</option>
                                    <option value="6">Consumer Electronics</option>
                                    <option value="7">Automobiles & Motorcycles</option>
                                </select>
                            </div>
                            <div class="form_item">
                                <input type="search" name="search" placeholder="Search Prudcts...">
                                <button type="submit" class="search_btn"><i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12">
                    <button class="mobile_menu_btn2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <button type="button" class="cart_btn">
                        <span class="cart_icon">
                            <i class="icon icon-ShoppingCart"></i>
                            <small class="cart_counter">3</small>
                        </span>
                        {{-- <span class="cart_amount">$909.00</span> --}}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-md-3">
                    <div class="allcategories_dropdown">
                        <button class="allcategories_btn" type="button" data-bs-toggle="collapse" data-bs-target="#allcategories_collapse" aria-expanded="false" aria-controls="allcategories_collapse">
                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewbox="0 0 24 24" aria-labelledby="statsIconTitle" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000"> <title id="statsIconTitle">Stats</title> <path d="M6 7L15 7M6 12L18 12M6 17L12 17"></path> </svg>
                            Browse categories
                        </button>
                        <div class="allcategories_collapse {{ $divClass }}" id="allcategories_collapse">
                            <div class="card card-body">
                                <ul class="allcategories_list ul_li_block">
                                    <li><a href="shop_grid.html"><i class="icon icon-Starship"></i> New Arrival Products</a></li>
                                    <li><a href="shop_list.html"><i class="icon icon-WorldWide"></i> Most Popular Products</a></li>
                                    <li><a href="shop_grid.html"><i class="icon icon-Star"></i> Deals of the day</a></li>
                                    <li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile Accessories</a></li>
                                    <li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i> Computer Accessories</a></li>
                                    <li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer Electronics</a></li>
                                    <li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles & Motorcycles</a></li>
                                    <li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile Accessories</a></li>
                                    <li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i> Computer Accessories</a></li>
                                    <li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer Electronics</a></li>
                                    <li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles & Motorcycles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-6">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                            <button type="button" class="offcanvas_close">
                                <i class="fal fa-times"></i>
                            </button>
                            <ul class="main_menu_list ul_li">
                                {{-- <li class="dropdown">
                                    <a class="nav-link" href="#" id="pages_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="pages_submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li class="dropdown">
                                            <a href="#" id="cart_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shopping Cart</a>
                                            <ul class="submenu dropdown-menu" aria-labelledby="cart_submenu">
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="cart_empty.html">Cart Empty</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="order_tracking.html">Order Tracking</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error.html">404 Error</a></li>
                                    </ul>
                                </li> --}}
                                <li><a class="nav-link" href="{{ route('frontend.index') }}">Home</a></li>
                                <li><a class="nav-link" href="{{ route('frontend.shop') }}">Shop</a></li>
                                <li><a class="nav-link" href="{{ route('frontend.about') }}">About Us</a></li>
                                <li>
                                    @auth
                                    <a class="nav-link" href="{{ route('dashboard_index') }}" target="_blank">Dashboard</a>
                                        @csrf
                                    </form>
                                    @else
                                    <a class="nav-link" href="{{ route('register') }}">Login / Register</a>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="offcanvas_overlay"></div>
                </div>

                <div class="col col-md-3">
                    <ul class="header_icons_group ul_li_right">
                        <li>
                            <a href="contact.html">
                                <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewbox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title id="locationIconTitle">Location</title> <path d="M12,21 C16,16.8 18,12.8 18,9 C18,5.6862915 15.3137085,3 12,3 C8.6862915,3 6,5.6862915 6,9 C6,12.8 8,16.8 12,21 Z"></path> <circle cx="12" cy="9" r="1"></circle>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="compare.html">
                                <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewbox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title id="rotateIconTitle">Rotate</title> <path d="M22 12l-3 3-3-3"></path> <path d="M2 12l3-3 3 3"></path> <path d="M19.016 14v-1.95A7.05 7.05 0 0 0 8 6.22"></path> <path d="M16.016 17.845A7.05 7.05 0 0 1 5 12.015V10"></path> <path stroke-linecap="round" d="M5 10V9"></path> <path stroke-linecap="round" d="M19 15v-1"></path> </svg>
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewbox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Favourite</title> <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path> </svg>
                                <span class="wishlist_counter">3</span>
                            </a>
                        </li>
                        <li>
                            @auth()
                                <a href="{{ route('dashboard_index') }}">
                                    <img class="rounded-circle p-1" src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0D8ABC&color=fff" width="42" alt="profile" >
                                </a>
                            @else
                                <a href="{{ route('register') }}">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewbox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title id="personIconTitle">Person</title> <path d="M4,20 C4,17 8,17 10,15 C11,14 8,14 8,9 C8,5.667 9.333,4 12,4 C14.667,4 16,5.667 16,9 C16,14 13,14 14,15 C16,17 20,17 20,20"></path> </svg>
                                </a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>