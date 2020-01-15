<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
Use App\Level;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
 
class AuthController extends Controller
{
 
    public function index()
    {
        return view('login');
    }  
 
    public function registration()
    {
      $levels=Level::all();
        return view('registration',compact('levels',$levels));
       
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            // Authentication passed...
           // return Auth::user();
           return redirect()->intended('peminjaman');
        }
        return Redirect::to("logins")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'nama_level' => 'required',
        'password' => 'required|min:6',
        ]);
        $levels=Level::all();
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("logins")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('layouts.master');
      }
       return Redirect::to("logins")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      $levels=Level::all();
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'nama_level' => $data['nama_level'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('logins');
    }
}