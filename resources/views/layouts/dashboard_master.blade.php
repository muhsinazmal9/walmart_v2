<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard_assets') }}/assets/media/image/favicon.png">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/vendors/bundle.css" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/vendors/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/vendors/slick/slick-theme.css" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/vendors/dataTable/datatables.min.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/assets/css/app.min.css" type="text/css">

</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">
    <!-- Sidebar >>> Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Settings -->

    <!-- Sidebar >>> Chat list -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h6 class="card-title mb-0">Chats</h6>
                    <a href="chat.html" class="btn btn-primary btn-sm">New Chat</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar4.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar4.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Chat list -->
</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="{{ route('dashboard_index') }}">
                        <img class="logo" src="{{ asset('dashboard_assets') }}/assets/media/image/logo/logo.png" alt="logo">
                        <img class="logo-small" src="{{ asset('dashboard_assets') }}/assets/media/image/logo/logo-small.png" alt="logo small">
                        <img class="logo-dark" src="{{ asset('dashboard_assets') }}/assets/media/image/logo/logo-dark.png" alt="logo dark">
                        <img class="logo-dark-small" src="{{ asset('dashboard_assets') }}/assets/media/image/logo/logo-dark-small.png" alt="logo dark small">
                    </a>
                </div>
            </div>

            <div class="header-body">
                <div class="header-body-left">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="mail.html" title="Mail" class="nav-link">
                                <span class="badge badge-warning nav-link-notify">3</span>
                                <i data-feather="mail"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="chat.html" title="Chat" class="nav-link">
                                <i data-feather="message-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="todo-list.html" title="Todo List" class="nav-link">
                                <i data-feather="check-square"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" title="Other Apps" data-toggle="dropdown">
                                <i data-feather="plus"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="file-manager.html" class="dropdown-item">File Manager</a>
                                <a href="calendar.html" class="dropdown-item">Calendar</a>
                                <a href="gallery.html" class="dropdown-item">Gallery</a>
                                <a href="invoice.html" class="dropdown-item">Invoice</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" title="Search" class="nav-link" data-action="search-bar">
                                <i data-feather="search"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                <i class="maximize" data-feather="maximize"></i>
                                <i class="minimize" data-feather="minimize"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" title="Notifications" data-toggle="dropdown">
                                <span class="badge badge-danger nav-link-notify">3</span>
                                <i data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Notifications</h6>
                                    <small class="opacity-7">1 unread notifications</small>
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-2">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        New customer registered
                                                        <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">20 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="divider-text small divider-center py-2">
                                            <span>Old Notifications</span>
                                        </li>
                                        <li>
                                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-2">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        New Order Recieved
                                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">45 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Server Limit Reached!
                                                        <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">55 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Apps are ready for update
                                                        <i title="" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11" data-original-title="Mark as unread"></i>
                                                    </p>
                                                    <span class="text-muted small">Yesterday</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="px-3 py-2 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="#">Mark All Read</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                                <i data-feather="shopping-bag"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Cart</h6>
                                    <small class="opacity-7">4 products</small>
                                </div>
                                <div class="dropdown-scroll">
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="list-group-item d-flex">
                                            <div>
                                                <figure class="avatar mr-3">
                                                    <img src="{{ asset('dashboard_assets') }}/assets/media/image/products/product6.png" alt="Canon 4000D 18-55 MM">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Canon 4000D 18-55 MM
                                                    <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $1,200</span>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item d-flex">
                                            <div>
                                                <figure class="avatar mr-3">
                                                    <img src="{{ asset('dashboard_assets') }}/assets/media/image/products/product3.png" alt="pineapple">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Snopy SN-BT96 Pretty
                                                    <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $250</span>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item d-flex">
                                            <div>
                                                <figure class="avatar mr-3">
                                                    <img src="{{ asset('dashboard_assets') }}/assets/media/image/products/product7.png" class="rounded" alt="pineapple">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Lenovo Tab E10 TB-X104F 32GB
                                                    <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $100</span>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item d-flex">
                                            <div>
                                                <figure class="avatar mr-3">
                                                    <img src="{{ asset('dashboard_assets') }}/assets/media/image/products/product6.png" alt="Canon 4000D 18-55 MM">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Canon 4000D 18-55 MM
                                                    <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                                </p>
                                                <span class="text-muted small">X $1,200</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 border-top text-right">
                                    <p class="d-flex justify-content-between align-items-center mb-1 small">
                                        <span>Sub Total</span>
                                        <span>$1,650</span>
                                    </p>
                                    <p class="d-flex justify-content-between align-items-center mb-1 small">
                                        <span>Taxes</span>
                                        <span>$15</span>
                                    </p>
                                    <p class="d-flex justify-content-between align-items-center mb-1 small font-weight-bold">
                                        <span>Total</span>
                                        <span>$1,675</span>
                                    </p>
                                    <button class="btn btn-primary btn-block mt-2">
                                        Order and Payment <i class="ti-arrow-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                                <i data-feather="settings"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                <figure class="avatar avatar-sm">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0D8ABC&color=fff" class="rounded-circle" alt="avatar">
                                </figure>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4" data-background-image="{{ asset('dashboard_assets') }}/assets/media/image/image1.jpg">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0D8ABC&color=fff" class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="{{ route('profile.edit') }}" class="list-group-item">Profile</a>
                                    <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item text-danger">Sign Out!</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                                        @csrf
                                    </form>
                                </div>
                                <div class="pb-0 p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Completed Tasks
                                            <span class="float-right">%68</span>
                                        </h6>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="d-flex justify-content-between">
                                            Storage
                                            <span>%25</span>
                                        </h6>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>

            <!-- Header search bar -->
            <div class="header-search-bar">
                <form>
                    <button class="btn btn-light search-bar-icon">
                        <i class="ti-search"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Search">
                    <a href="#" class="btn btn-light search-bar-close" data-action="search-bar-close">
                        <i class="ti-close"></i>
                    </a>
                </form>
            </div>
            <!-- ./ Header search bar -->
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <div class="navigation-menu-body">
                <ul>
                    <li>
                        <a href="{{ route('dashboard_index') }}">
                            <span class="nav-link-icon">
                                <i data-feather="pie-chart"></i>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('frontend_index') }}" target="_blank">
                            <span class="nav-link-icon">
                                <i data-feather="layout"></i>
                            </span>
                            <span>Visit Website</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                @yield('upper-header')
                @yield('content')
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© {{ now()->year ." ". config('app.name') }} </div>
                <div>
                    <nav class="nav">
                        <a href="#" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ asset('dashboard_assets') }}/vendors/bundle.js"></script>

    <!-- To use theme colors with Javascript -->
    <div class="colors">
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

    <!-- Apex chart -->
    <script src="{{ asset('dashboard_assets') }}/samples/assets/irregular-data-series.js"></script>
    <script src="{{ asset('dashboard_assets') }}/vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('dashboard_assets') }}/vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="{{ asset('dashboard_assets') }}/vendors/dataTable/datatables.min.js"></script>

    <!-- Vamp -->
    <script src="{{ asset('dashboard_assets') }}/vendors/vmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/vendors/vmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('dashboard_assets') }}/assets/js/examples/vmap.js"></script>

    <!-- Dashboard scripts -->
    <script src="{{ asset('dashboard_assets') }}/assets/js/examples/pages/ecommerce-dashboard.js"></script>

<!-- App scripts -->
<script src="{{ asset('dashboard_assets') }}/assets/js/app.min.js"></script>
</body>
</html>