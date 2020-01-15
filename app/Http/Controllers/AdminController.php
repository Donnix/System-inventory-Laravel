<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
       
      if(Auth::check()){
        return view('layouts.master');
      }
       return Redirect::to("logins")->withSuccess('Opps! You do not have access');
   
    }  
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('logins');
    }
}
