<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('customers')->orderBy('date','desc')->get();
 
   
        return view('Orders.orders',[
            'orders'=>$orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        $order->load('customers');
        $products = OrderProduct::join('products','products.id','=','order_products.product_id')->join('orders','orders.id','=','order_products.order_id')->where('orders.id','=',$order->id)->get();
        return view('Orders.single-order',compact('order','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        if($request->status=='On Delivery'){
            $validate = $request->validate([
                'delivery_company'=>'required',
                'tracking_number'=>'required',
                'status'=>'required'
            ]);
        }else{
            $validate = $request->validate([
                'status'=>'required'
            ]);
    

        }



    

        $order->update($validate);


        $order->load('customers');
        $customer_email= $order->customers->email;
        $customer_phone= $order->customers->phone;
        $customer_name= $order->customers->first_name." ". $order->customers->last_name;
        $order_status= $order->status;
        $order_id= $order->id;
        $date=Carbon::now();
        $delivery_company= $request->delivery_company;
        $tracking_num = $request->tracking_number;

 
        // Send SMS
        // SmsController::sendOrderUpdate($customer_name,$customer_phone,$order_id,$order_status,$date, $delivery_company,$tracking_num);


        // Send email
        // MailController::sendOrderUpdate($customer_name,$customer_email,$order_id,$order_status,$date, $delivery_company,$tracking_num);





















        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders')->with('success','Successfully Deleted!');
    }

}
