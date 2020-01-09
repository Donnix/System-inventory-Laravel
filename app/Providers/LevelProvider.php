<?php
namespace App\Providers;
use App\Level;
use illuminate\Support\ServiceProvider;

class LevelProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('level_array', Level::all());
        });
    }
}

?> 