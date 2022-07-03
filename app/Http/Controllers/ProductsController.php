<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

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
        return redirect()->route('products')->with('success','Successfully Deleted!');
    }


    public function show(Product $product)
    {
       
        $categories = Category::get();
        $brands = Brand::get();
        $product->load('categories');
        
        return view('Products.single-product',compact('product','categories','brands'));
    }

    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'name'=>'required',
            'cost_price'=>'required',
            'selling_price'=>'required',
            'count'=>'required',
            'description'=>'required',
            'brand_id'=>'required',
            'category_id'=>'required'
   
        ]);

        
        if($request->image != "" && $request->image !=null){
            $newImageName = time().".".$request->image->extension();
            $request->image->move(public_path('images/products'),$newImageName);
            $validate['product_image'] = $newImageName;
        }  



        
    

        
        $product->update($validate);
        return redirect()->back()->with('success','Successfully Updated!');
    }

    public function store(Request $request)
    { 

        $validate = $request->validate([
            'product_name' =>'required',
            'image'=>'required',
            'cost_price' =>'required',
            'selling_price' =>'required',
            'count' =>'required',
            'description' =>'required',
            'category_id' =>'required',
            'brand_id' =>'required',
   
        ]);



      
        $newImageName = time().".".$request->image->extension();
        $request->image->move(public_path('images/products'),$newImageName);


        


        $product = Product::create([
        
            'name' =>$request->input('product_name'),
            'product_image'=>$newImageName,
            'cost_price' =>$request->input('cost_price'),
            'selling_price' =>$request->input('selling_price'),
            'count' =>$request->input('count'),
            'description' =>$request->input('description'),
            'category_id' =>$request->input('category_id'),
            'brand_id' =>$request->input('brand_id')
           
        ]);

        return redirect()->route('products')->with('success','Product Successfully Added!');

    }

    public function new()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('Products.new-product',compact('categories','brands'));
    }
}