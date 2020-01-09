<?php
namespace App\Providers;
use App\Order;
use illuminate\Support\ServiceProvider;

class OrderProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('order_array', Order::all());
        });
    }
}

?> 