<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Response;

class ApiCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::with('products')->get();
        return Response::json($cart);
    }

    public function store(Request $request)
    {
        $product = $request->query('product');

        $cart = new Cart;

        $cart->customer_id = "1";
        $cart->product_id = $request->productId;
        $cart->quantity = $request->cartQuantity;
        $cart->save();

        
    }


    public function delete($id)
    {
        $product = Cart::where('product_id','=',$id);
        $product->delete();
    }

    
}
