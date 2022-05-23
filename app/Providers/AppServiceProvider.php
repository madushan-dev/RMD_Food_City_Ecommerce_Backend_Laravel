<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use App\Models\Message;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderProduct;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('layouts.topbar', function ($view) {
            $messages = Message::limit(5)->get();
            $view->with('messages', $messages);
        });


        $customers = Customer::count();
        $orders = Order::count();

        View::composer('dashboard', function ($view) {
            $total_customers = Customer::count();
            $total_orders = Order::count();

            $total_revenue = DB::table('orders')
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('payment_amount');

            $total_cost = DB::table('order_products')
            ->select(DB::raw('(sum(order_products.quantity * products.cost_price)) as totalcost'))
            ->leftJoin('products','order_products.product_id','=','products.id')
            ->whereYear('order_products.created_at', Carbon::now()->year)
            ->whereMonth('order_products.created_at', Carbon::now()->month)
            ->get();

            $total_cost = $total_cost[0]->totalcost;

            $profit = $total_revenue - $total_cost;

            $order_list = DB::table('orders')
            ->leftJoin('customers','orders.customer_id','=','customers.id')
            ->orderBy('orders.id', 'desc')
            ->take(5)
            ->get();

            $customer_list = DB::table('customers')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

      
     

            $view->with('total_customers', $total_customers)->with('total_orders',$total_orders)->with('total_revenue',$total_revenue)->with('profit',$profit)->with('order_list',$order_list)->with('customer_list',$customer_list);

        });


    }
}
