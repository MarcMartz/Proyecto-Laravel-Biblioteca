<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = category::paginate();
        
        return view('admin.category.index', compact('categories'));
        
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255',
            
        ]);

        $category = new category;
        $category->name = $request->name;
        
        $category->save();
        
        return redirect()->route('category.index')->with('success', 'Category created successfully');
       
    }

    public function show($category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = category::find($id);

        return view('admin.category.edit', compact('category'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255',
            
        ]);

        $category = category::find($id);
        $category->name = $request->name;
        $category->updated_at = now();
        
        
        $category->save();
        
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
       
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
