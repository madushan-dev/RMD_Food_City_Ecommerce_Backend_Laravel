<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
   
        $cart = OrderProduct::with('products')->where('order_id','=',null)->get();
        return Response::json($cart);
    }

    public function allcart(Request $request)
    {
   
        $cart = OrderProduct::with('products')->where('customer_id','=',$request->id)->where('order_id','=',null)->get();
        
        return Response::json($cart);
    }

    public function store(Request $request)
    {
        $product = $request->query('product');

        $cart = new OrderProduct;

        $cart->customer_id = $request->user_id;
        $cart->product_id = $request->productId;
        $cart->quantity = $request->cartQuantity;
        $cart->save();
    }

    public function makeorder(Request $request)
    {
        
        
        

        $customer = Customer::where('id', $request->cus_id)->first();
        $order = new Order;

        $order->customer_id = $customer->id;
        $order->delivery_name = $customer->first_name ." ".$customer->last_name;
        $order->delivery_address = $customer->address;
        $order->delivery_phone = $customer->phone;
        $order->payment_amount = $request->totalpayment;
        $order->status = "Processing";
        $order->profit = "100";

        if($request->payment_method =='card'){
            $order->payment_type = "Card Payment";
        }else{
            $order->payment_type = "Cash On Delivery ";
        }
        $first_name = $request->firstname;
        $last_name = $request->lastname;
        $phone = $request->phone;
        $address = $request->address;


        if(($first_name && $first_name !='' && $first_name !=null && $first_name !='undefined') || ($last_name && $last_name !='' && $last_name !=null && $last_name !='undefined')){
            $order->delivery_name = $first_name." ".$last_name;
        }

        if($phone && $phone !='' && $phone !=null && $phone !='undefined'){
            $order->delivery_phone = $phone;
        }
        if($address && $address !='' && $address !=null && $address !='undefined'){
            $order->delivery_address = $address;
        }

        $profit = 0;
        $order_value= 0;
        
        foreach($request->cartproducts as $product){

      

            $product_id =  $product['product_id'];
            $quantity = $product['quantity'];
            $product = Product::find($product_id);
            $count= $product->count;
            $current_quantity = $count - $quantity;

            Product::where('id',$product_id)->update(['count'=> $current_quantity]);
            $order_value += ($product->cost_price * $quantity);

        }

        $order->profit = $order->payment_amount - $order_value;


        $order->save();
        $order_id = $order->id;
        $order = Order::where('id', $order_id)->first();

        $customer = Customer::where('id', $customer->id)->first();


        $reward_points = ($customer->reward_points) + ($order->payment_amount*0.05);
        $customer->reward_points = $reward_points;

        $customer->save();


        if(($request->affiliate_id && $request->affiliate_id !='' && $request->affiliate_id !=null && $request->affiliate_id !='undefined') && $request->affiliate_id != $customer->affiliate_id){

            $affiliate_id = $request->affiliate_id;

            $affiliator = Customer::where('affiliate_id', $affiliate_id)->first();
    
            $affiliator->reward_points  = ($affiliator->reward_points) + ($order->payment_amount*0.05);
    
            $affiliator->save();

        }
   

        
    

        $orderproducts = OrderProduct::where('customer_id', $customer->id)->where('order_id','=',null)->update(['order_id'=>$order_id]);


  
        
        // Send SMS
        // SmsController::sendOrderPlaced($order->delivery_name,$customer->phone,$order_id,$order->date,$order->payment_amount);


        // Send email
        //   MailController::sendOrderPlaced($order->delivery_name,$customer->email,$order_id,$order->date,$order->payment_amount);


        return Response::json($order_id);
    }
    
    


    public function delete($id,Request $request)
    {
     
        $product = OrderProduct::where('product_id','=',$id)->where('customer_id','=',$request->cus_id);
        $product->delete();
    }

    
}
