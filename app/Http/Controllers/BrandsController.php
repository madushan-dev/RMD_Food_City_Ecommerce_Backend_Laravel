<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        return view('Brands.brands',[
            'brands'=>$brands
        ]);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands')->with('success','Successfully Deleted!');
    }

    public function store(Request $request)

    {
        $validate = $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $category = Brand::create([
            'name' =>$request->input('name'),
            'description' =>$request->input('description'),
        ]);

        return redirect()->route('brands')->with('success','Brand Successfully Added!');

    }

}
