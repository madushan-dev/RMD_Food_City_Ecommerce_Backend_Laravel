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

        


    }
}
