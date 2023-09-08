@extends('layouts.frontend_master')
@section('header')
    <x-frontend_header headerClass="header-style-3" divClass="collapse" />
@endsection

@section('content')
    <!-- breadcrumb_section - start
    ================================================== -->
    <div class="breadcrumb_section">
        <div class="container">
            <ul class="breadcrumb_nav ul_li">
                <li><a href="index-1.html">Home</a></li>
                <li>My Account</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->

    <!-- account_section - start
    ================================================== -->
    <section class="account_section section_space">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3">
                    <div class="account_menu">
                        <ul class="account_menu_list ul_li_block" id="accountTab">
                            <li class="active"><a href="#!">Account Dashboard</a></li>
                            <li><a href="#!">Account Information</a></li>
                            <li><a href="#!">Address Book</a></li>
                            <li><a href="#!">My Orders</a></li>
                            <li><a href="#!">Billing Agreements</a></li>
                            <li><a href="#!">Recurring Profiles</a></li>
                            <li><a href="#!">My Product Reviews</a></li>
                            <li><a href="#!">My Tags</a></li>
                            <li><a href="#!">My Wishlist</a></li>
                            <li><a href="#!">My Applications</a></li>
                            <li><a href="#!">Newsletter Subscriptions</a></li>
                            <li><a href="#!">My Downloadable Products</a></li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col col-lg-9">
                    <div class="account_content_area">
                        <h3>My Dashboard</h3>
                        <ul class="content_layout ul_li_block">
                            <li>
                                <h4><strong>Hello, {{ auth()->user()->name }}!</strong></h4>
                                <p class="mb-0">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                            </li>
                            <li>
                                <h4>Contact Information</h4>
                                <p class="mb-0">{{ auth()->user()->name }}</p>
                                <a class="mb-0" href="#!">{{ auth()->user()->email }}</a>
                                <p class="mb-3">Role : {{ auth()->user()->role }}</p>
                                <ul class="btns_group ul_li">
                                    <li><a class="btn" href="#!">Edit Account Information</a></li>
                                    <li><a class="btn" href="#!">Change Password</a></li>
                                    <li>
                                        <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log-out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Newsletter</h4>
                                <p>You are currently not subscribed to any newsletter. </p>
                                <a class="btn" href="#!">Edit Subscription</a>
                            </li>
                            <li>
                                <h4 class="mb-3">Address Book</h4>
                                <a class="btn" href="#!">Manage Addresses</a>
                            </li>
                            <li>
                                <h4>Default Billing Address</h4>
                                <p>You have not set a default billing address.</p>
                                <a class="btn" href="#!">Edit Address</a>
                            </li>
                            <li>
                                <h4>Default Shipping Address</h4>
                                <p>You have not set a default shipping address.</p>
                                <a class="btn" href="#!">Edit Address</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- account_section - end
    ================================================== -->
@endsection