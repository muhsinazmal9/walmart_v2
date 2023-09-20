@extends('layouts.dashboard_master')

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h3>View Categories ({{ $categories->count() }})</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="card-title">
                        <h6>View Category</h6>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Category Icon</th>
                                    <th scope="col">Slug</th>
                                    <th class="text-right" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category) 
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <i class="{{ $category->category_icon }}"></i>
                                        </td>
                                        <td>-</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-outline-light btn-sm" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button">Update</button>
                                                    <button class="dropdown-item" type="button">Delete</button>
                                                    {{-- <button class="dropdown-item" type="button">Something else here</button> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
