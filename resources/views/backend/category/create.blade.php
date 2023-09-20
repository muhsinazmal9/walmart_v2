@extends('layouts.dashboard_master')


@section('content')
    <div class="page-header">
        <div class="page-title">
            <h3>Add Category</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" placeholder="Enter category name" name="category_name" value="{{ old('category_name') }}">
                        </div>
                        @error('category_name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group">
                            <label>Category Icon</label>
                            <input type="text" class="form-control" placeholder="Enter category icon class" name="category_icon" value="{{ old('category_icon') }}">
                            <small class="form-text text-muted">FontAwesome 5, Icofont, Stroke Gap Icons by GraphicBurger</small>
                        </div>
                        @error('category_icon')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        {{-- <!-- Select -->
                        <div class="form-group">
                            <label>Category Type</label>
                            <select class="form-control" name="category_type">
                                <option value="parent">Parent</option>
                                <option value="sub">Sub Category</option>
                            </select>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
