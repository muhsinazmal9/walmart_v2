@extends('layouts.dashboard_master')

@section('breadcumb')
    
@endsection

@section('upper-header')
    <x-dashboard-welcome-header />
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card border-0s card-light">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="card-title mb-3">Weekly Average New Sales</h6>
                            <h1>$1,720</h1>
                        </div>
                        <div class="d-flex">
                            <div class="icon-block icon-block-floating bg-danger mr-2">
                                <i class="ti-arrow-up"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <small class="text-muted">Last 7 Days</small>
                                <div class="text-danger">+52,50%</div>
                            </div>
                        </div>
                    </div>
                    <div id="ecommerce-activity-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-light">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-2">Monthly Sales</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted">Avarage total sales +25,5%</p>
                    <div id="hot-products"></div>
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <i class="fa fa-circle mr-1 text-success"></i> Bank Card <br>
                            <small class="text-muted">25,45% over</small>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-circle mr-1 text-primary"></i> Credit Card <br>
                            <small class="text-muted">75,55% over</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card card-light">
                <div class="card-body">
                    <h6 class="card-title mb-3 d-flex justify-content-between">
                        Sales
                        <small class="text-muted">Last 30 days</small>
                    </h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-3">25,400</h2>
                            <small class="text-success">
                                <i class="ti-angle-up mr-1"></i>
                                2.00%
                            </small>
                        </div>
                        <div class="icon-block icon-block-xl icon-block-floating bg-secondary opacity-7">
                            <i class="ti-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-light">
                <div class="card-body">
                    <h6 class="card-title mb-3 d-flex justify-content-between">
                        Orders
                        <small class="text-muted">Last 30 days</small>
                    </h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-3">62,033</h2>
                            <small class="text-danger">
                                <i class="ti-angle-down mr-1"></i>
                                1.59%
                            </small>
                        </div>
                        <div class="icon-block icon-block-xl icon-block-floating bg-success opacity-7">
                            <i class="ti-package"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-light">
                <div class="card-body">
                    <h6 class="card-title mb-3 d-flex justify-content-between">
                        Customers
                        <small class="text-muted">Last 30 days</small>
                    </h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-3">34,518</h2>
                            <small class="text-success">
                                <i class="ti-angle-up mr-1"></i>
                                2.07%
                            </small>
                        </div>
                        <div class="icon-block icon-block-xl icon-block-floating bg-warning opacity-7">
                            <i class="ti-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h6 class="card-title">Recent Orders</h6>
                <div>
                    <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="recent-orders" class="table table-lg">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Customer</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">3145</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product1.png" class="rounded mr-3" alt="grape">
                                        <span>HP Pavilion 15-EC0005NT AMD</span>
                                    </a>
                                </td>
                                <td>Dollie Bullock</td>
                                <td>$230</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">7321</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product2.png" class="rounded mr-3" alt="banana">
                                        <span>Samsung Galaxy A51 128 GB</span>
                                    </a>
                                </td>
                                <td>Holmes Hines</td>
                                <td>$300</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Payment accepted</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">9342</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product3.png" class="rounded mr-3" alt="cherry">
                                        <span>Snopy SN-BT96 Pretty</span>
                                    </a>
                                </td>
                                <td>Serena Glover</td>
                                <td>$250</td>
                                <td>
                                    <span class="badge bg-danger-bright text-danger">Payment error</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">6416</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product4.png" class="rounded mr-3" alt="papaya">
                                        <span>Ultimate Ears Wonderboom</span>
                                    </a>
                                </td>
                                <td>Dianne Prince</td>
                                <td>$550</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Payment accepted</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">92327</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product5.png" class="rounded mr-3" alt="pig">
                                        <span>Canon Pixma E3140 Printer</span>
                                    </a>
                                </td>
                                <td>Morgan Pitts</td>
                                <td>$280</td>
                                <td>
                                    <span class="badge bg-warning-bright text-warning">Preparing the order</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">3013</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product6.png" class="rounded mr-3" alt="pineapple">
                                        <span>Canon 4000D 18-55 MM</span>
                                    </a>
                                </td>
                                <td>Merrill Richardson</td>
                                <td>$128</td>
                                <td>
                                    <span class="badge bg-info-bright text-info">Awaiting PayPal payment</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">10323</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product7.png" class="rounded mr-3" alt="pomegranate">
                                        <span>Lenovo Tab E10 TB-X104F 32GB 10.1"</span>
                                    </a>
                                </td>
                                <td>Krista Mathis</td>
                                <td>$500</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">Shipped</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">4218</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product8.png" class="rounded mr-3" alt="raspberry">
                                        <span>Samsung 55Q60RAT 55"</span>
                                    </a>
                                </td>
                                <td>Frankie Hewitt</td>
                                <td>$300</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Remote payment accepted</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">3158</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product9.png" class="rounded mr-3" alt="strawberry">
                                        <span>Toshiba Canvio Basic 1TB 2.5"</span>
                                    </a>
                                </td>
                                <td>Hayden Fitzgerald</td>
                                <td>$200</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Delivered</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">9610</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="{{ asset('dashboard_assets') }}/assets/media/image/products/product10.png" class="rounded mr-3" alt="watermelon">
                                        <span>Fms Wireless Controller</span>
                                    </a>
                                </td>
                                <td>Cole Holcomb</td>
                                <td>$700</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="card-title">Revenue by Country</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Total Revenue</p>
                    <h2 class="mb-4">$469,453</h2>
                    <div class="progress mb-3" style="height: 10px">
                        <div class="progress-bar bg-secondary" style="width: 30%" role="progressbar"></div>
                        <div class="progress-bar bg-info" style="width: 12%" role="progressbar"></div>
                        <div class="progress-bar bg-warning" style="width: 20%" role="progressbar"></div>
                        <div class="progress-bar bg-success" style="width: 18%" role="progressbar"></div>
                        <div class="progress-bar bg-danger" style="width: 20%" role="progressbar"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="mb-0">
                                <span class="fa fa-circle text-danger mr-1"></span>
                                Russia
                            </p>
                            <h5 class="mt-2 mb-0">30%</h5>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <span class="fa fa-circle text-info mr-1"></span>
                                Australia
                            </p>
                            <h5 class="mt-2 mb-0">12%</h5>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <span class="fa fa-circle text-warning mr-1"></span>
                                China
                            </p>
                            <h5 class="mt-2 mb-0">20%</h5>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <span class="fa fa-circle text-success mr-1"></span>
                                Tunisia
                            </p>
                            <h5 class="mt-2 mb-0">18%</h5>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <span class="fa fa-circle text-danger mr-1"></span>
                                Spain
                            </p>
                            <h5 class="mt-2 mb-0">20%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card border-0 bg-info-bright">
                <div class="card-body">
                    <div class="text-center">
                        <p>Total sales this month</p>
                        <h2>$158,000</h2>
                        <p>This chart shows total sales. You can use the button below for details of this
                            month's sales.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-info">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Reviews</h6>
                    <div class="card-scroll">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(3.5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(4.5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-0 py-4">
                                <a href="#" class="flex-shrink-0">
                                    <figure class="avatar mr-3">
                                        <img src="{{ asset('dashboard_assets') }}/assets/media/image/user/man_avatar4.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(4)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="#" class="btn btn-outline-light">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="card-title mb-0">Top Sales</h6>
                        <a href="#" class="btn btn-outline-light">All Sales</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Total Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">Apple</a>
                                </td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Samsung <span class="badge badge-danger ml-1">New</span></a>
                                </td>
                                <td>52</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Huawei</a>
                                </td>
                                <td>74</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">General Mobile</a>
                                </td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Xiaomi</a>
                                </td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Nokia</a>
                                </td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Sony</a>
                                </td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Alcatel</a>
                                </td>
                                <td>5</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection