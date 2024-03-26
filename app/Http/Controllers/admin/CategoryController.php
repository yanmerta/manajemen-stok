<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $pageTitle = 'Category'; 
        $categories = Category::all();
        return view('admin.categories.index', compact('categories', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Container';
        return view('admin.categories.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required',
            'slug' => 'required',
        ]); 

        Category::create([
            'category_name' => $validatedData['category_name'],
            'slug' => $validatedData['slug'],
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully');
    }

    public function edit($id)
{
    $categories = Category::find($id);
    $pageTitle = 'Edit Container Data - ' . $categories->category_name;
    return view('admin.categories.edit', compact('categories', 'pageTitle'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'category_name' => 'required',
        'slug' => 'required',
    ]);

    $category = Category::find($id);
    
    if ($category) {
        $category->update([
            'category_name' => $validatedData['category_name'],
            'slug' => $validatedData['slug'],
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category data updated successfully');
    } else {
        return redirect()->back()->with('error', 'Category not found');
    }
}


public function destroy($id)
{
    $categories = Category::findOrFail($id);
    $categories->delete();

    return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');
}
    
}