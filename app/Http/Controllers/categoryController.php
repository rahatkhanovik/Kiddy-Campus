<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class categoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        Category::storeCategory($request);
        return redirect('/admin/category/')->with('store_message','A new category has been inserted!!');
    }

    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, string $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/admin/category/')->with('update_message','A category has been updated!!');
    }

    public function destroy(string $id)
    {
        Category::destroyCategory($id);
        return redirect('/admin/category/')->with('delete_message','A category has been deleted!!');
    }
}
