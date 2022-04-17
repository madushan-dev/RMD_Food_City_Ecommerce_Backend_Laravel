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
}