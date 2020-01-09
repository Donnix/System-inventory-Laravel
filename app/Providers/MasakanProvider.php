<?php
namespace App\Providers;
use App\Masakan;
use illuminate\Support\ServiceProvider;

class MasakanProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('masakan_array', Masakan::all());
        });
    }
}

?> 