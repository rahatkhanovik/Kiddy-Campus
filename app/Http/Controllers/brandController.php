<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index',compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        Brand::storeBrand($request);
        return redirect('/admin/brand/')->with('store_message','A new brand has been inserted!!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $brands = Brand::findOrfail($id);
        return view('admin.brand.edit',compact('brands'));
    }

    public function update(Request $request, string $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/admin/brand/')->with('update_message','A brand has been updated!!');
    }

    public function destroy(string $id)
    {
        Brand::destroyBrand($id);
        return redirect('/admin/brand/')->with('delete_message','A brand has been deleted!!');
    }
}
