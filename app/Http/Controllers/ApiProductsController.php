<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Response;

class ApiProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    
    {
   
        $result = $request->query('results');
        $category = $request->query('category');
        $type = $request->query('type');

        if($result && !$result==''){


            if($type && $type=='bestseller'){
                $products = Product::with('categories')->take($result)->inRandomOrder()->get();

            }elseif ($type && $type=='saleproducts') {
                $products = Product::with('categories')->take($result)->get();
            }
            elseif ($category !='') {
                $products = Product::where('category_id', $category)->with('categories')->take($result)->get();
            }



            else{
                $products = Product::with('categories')->take($result)->orderBy('id', 'DESC')->get();
            }
           
      }

      else{

            if($request->query('category')){
              $products = Product::with('categories')->take(2)->get();
            }
      }
        
        return Response::json($products);
    }
    public function show($id)
    {
        $product = Product::with('categories')->with('reviews.customers')->find($id);
        return Response::json([$product]);
    }

    public function shop(Request $request){

        $category = $request->query('category');
        if($category !='' ){
            $products = Product::with('categories')->where('category_id', $category)->get();
        }else{
            $products = Product::with('categories')->get();
        }
      

        return Response::json($products);
    }

}
