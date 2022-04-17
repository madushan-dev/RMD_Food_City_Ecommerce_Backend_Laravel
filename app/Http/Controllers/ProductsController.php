<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')->get();
   
        return view('Products.products',[
            'products'=>$products
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products');
    }


    public function show(Product $product)
    {
        $product->get();
        return view('Products.single-product',compact('product','product'));
    }

    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'name'=>'required',
            'cost_price'=>'required',
            'selling_price'=>'required',
            'count'=>'required',
            'category_id'=>'required'
        ]);

        $product->update($validate);
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' =>$request->input('product_name'),
            'cost_price' =>$request->input('cost_price'),
            'selling_price' =>$request->input('selling_price'),
            'count' =>$request->input('count'),
            'category_id' =>$request->input('category')
        ]);

        return redirect()->route('products');

    }

    public function new(Product $product)
    {
        return view('Products.new-product');
    }
}