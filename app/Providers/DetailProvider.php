<?php
namespace App\Providers;
use App\Detail;
use illuminate\Support\ServiceProvider;

class DetailProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('detail_array', Detail::all());
        });
    }
}

?> 