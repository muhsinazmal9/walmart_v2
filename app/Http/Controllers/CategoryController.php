<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // some simple validation
        $request->validate([
            'category_name'=>'required|unique:categories,category_name',
            'category_icon'=>'required',
        ]);

        // insert to database
        Category::insert([
            'category_name' => $request->category_name,
            'category_icon' => $request->category_icon,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'New Category Added Successfully!');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('backend.category.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
