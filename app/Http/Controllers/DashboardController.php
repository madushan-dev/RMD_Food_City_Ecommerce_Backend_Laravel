<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use App\Models\Message;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderProduct;

class DashboardController extends Controller
{
    public function index()
    {
       
  
         
        $total_customers = Customer::count();
        $total_orders = Order::count();



        $revenue_data = Order::select(DB::raw("SUM(payment_amount) as sum"))
        ->whereYear('created_at', Carbon::now()->year)
        ->whereMonth('created_at', Carbon::now()->month)
        ->get();


        $revenue = $revenue_data[0]->sum;


        $profit_data = Order::select(DB::raw("SUM(profit) as sum"))
        ->whereYear('created_at', Carbon::now()->year)
        ->whereMonth('created_at', Carbon::now()->month)
        ->get();
     
        $profit = $profit_data[0]->sum;
        
 


        $order_list = DB::table('orders')
        ->leftJoin('customers','orders.customer_id','=','customers.id')
        ->orderBy('orders.date', 'desc')
        ->take(5)
        ->where('orders.deleted_at', NULL)
        ->get();
           

        $customer_list = DB::table('customers')
        ->orderBy('id', 'desc')
        ->take(5)
        ->get();


        return view('dashboard',[
            'total_customers'=>$total_customers,
            'total_orders'=>$total_orders,
            'total_revenue'=>$revenue,
            'total_profit'=>$profit,
            'order_list'=>$order_list,
            'customer_list'=>$customer_list,

        ]);
    
    }
}
