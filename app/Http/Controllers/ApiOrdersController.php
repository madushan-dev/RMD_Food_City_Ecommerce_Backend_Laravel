<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiOrdersController extends Controller
{
    public function index(Request $request){
        {

            $customer_id = $request->id;
            $orders = Order::with('customers')->where('customer_id',  $customer_id)->orderBy('date','desc')->get();
    
            return Response::json($orders);
        }
    }

    public function order(Request $request){
        {


            $order_id = $request->id;
            $order = Order::with('customers')->where('id',  $order_id)->get();
            $products = OrderProduct::join('products','products.id','=','order_products.product_id')->join('orders','orders.id','=','order_products.order_id')->where('orders.id','=',$order_id)->get();

    
            return Response::json(compact('order','products'));
        }
    }
}