<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("category.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|unique:categories,name",
            "description"=> "required"
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $category = new Category();
        $category->name = $name;
        $category->description = $description;
        $category->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
    
        return view("category.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("category.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=> ['nullable',Rule::unique('categories')->ignore($category->id)],
            'description'=> "nullable"
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $category->name = $name ?? $category->name;
        $category->description = $description ?? $category->description;
        $category->save();
        return redirect()->route('category.index')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect("")->route('category.index')->with("success","");
    }
}
