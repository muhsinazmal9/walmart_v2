<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('frontend_assets') }}/images/logo/favourite_icon_1-1.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/bootstrap.min-1.css">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/fontawesome-1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/stroke-gap-icons-1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/icofont-1.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/animate-1.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/slick-1.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/slick-theme.css">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/magnific-popup.css">

    <!-- jquery-ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/jquery-ui.css">

    <!-- select option - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/nice-select.css">

    <!-- woocommercen - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/woocommerce.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets') }}/css/style.css">
</head>

<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">
        
        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <div id="preloader"></div>
        <!-- preloader - end -->

        
        <!-- header_section - start
        ================================================== -->
        @yield('header')
        <!-- header_section - end
        ================================================== -->
        
        <!-- main body - start
        ================================================== -->
        <main>
            <x-frontend_sidebar_cart />
            @yield('content')
            
            <!-- newsletter_section - start
            ================================================== -->
            <section class="newsletter_section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                            <p>Get E-mail updates about our latest products and special offers.</p>
                        </div>
                        <div class="col col-lg-6">
                            <form action="#!">
                                <div class="newsletter_form">
                                    <input type="email" name="email" placeholder="Enter your email address">
                                    <button type="submit" class="btn btn_secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter_section - end
            ================================================== -->
        
        </main>
        <!-- main body - end
        ================================================== -->
        
        <!-- footer_section - start
        ================================================== -->
        <footer class="footer_section">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_about">
                                <div class="brand_logo">
                                    <a class="brand_link" href="">
                                        <img src="{{ asset('frontend_assets') }}/images/logo/logo_1x.png" srcset="{{ asset('frontend_assets') }}/images/logo/logo_2x.png 2x" alt="logo_not_found">
                                    </a>
                                </div>
                                <ul class="social_round ul_li">
                                    <li><a href="#!"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a href="#!"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#!"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Quick Links</h3>
                                <ul class="ul_li_block">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">My Account</a></li>
                                    <li><a href="#!">Orders</a></li>
                                    <li><a href="#!">Tracking List</a></li>
                                    <li><a href="#!">Tearm</a></li>
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">My Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_contact">
                                <h3 class="footer_widget_title text-uppercase">Contact Onfo</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                                <div class="hotline_wrap">
                                    <div class="footer_hotline">
                                        <div class="item_icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">Have any question?</h4>
                                            <span class="hotline_number">+ 123 456 7890</span>
                                        </div>
                                    </div>
                                    <div class="livechat_btn clearfix">
                                        <a class="btn border_primary" href="#!">Live Chat</a>
                                    </div>
                                </div>
                                <ul class="store_btns_group ul_li">
                                    <li><a href="#!"><img src="{{ asset('frontend_assets') }}/images/app_store.png" alt="app_store"></a></li>
                                    <li><a href="#!"><img src="{{ asset('frontend_assets') }}/images/play_store.png" alt="play_store"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <p class="copyright_text">
                                ©{{ now()->year }} <a href="{{ route('frontend.index') }}">{{ Config('app.name') }}</a>. All Rights Reserved.
                            </p>
                        </div>
                        
                        <div class="col col-md-6">
                            <div class="payment_method">
                                <h4>Payment:</h4>
                                <img src="{{ asset('frontend_assets') }}/images/payments_icon.png" alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('frontend_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>

    <!-- carousel - jquery plugins collection -->
    <script src="{{ asset('frontend_assets') }}/js/jquery-plugins-collection.js"></script>

    <!-- google map  -->
    <script src="../maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('frontend_assets') }}/js/gmaps.min.js"></script>

    <!-- custom - main-js -->
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>

</body>
</html>