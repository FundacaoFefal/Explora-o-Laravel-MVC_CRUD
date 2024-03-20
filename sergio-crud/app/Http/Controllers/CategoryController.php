<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Add the missing import statement for the Category model

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('categories/create')->with('status', 'Category Created Successfully!')->with('alert', 'success')->with('alert_message', 'Category Created Successfully!');
    }

    public function edit(int $id)
    {
        $category = Category::FindOrFail($id);
        return view('category.edit' , compact('category'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
        ]);

        $category = Category::FindOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('status', 'Category Updated Successfully!')->with('alert', 'success')->with('alert_message', 'Category Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $category = Category::FindOrFail($id);
        $category->delete();
        return redirect()->back()->with('status', 'Category Deleted Successfully!')->with('alert', 'success')->with('alert_message', 'Category Deleted Successfully!');
    }

    public function show(int $id)
    {
        $category = Category::findOrFail($id);
        return view('category.details', compact('category'));
    }
}
