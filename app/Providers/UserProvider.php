<?php
namespace App\Providers;
use App\User;
use illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('user_array', User::all());
        });
    }
}

?> 