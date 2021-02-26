<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Hash;
use Session;

class UserController extends Controller
{
    function Register(Request $req)
    {
    	$req->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'password' => 'required|min:3',

    	]);

    	 $count = User::where('email', $req->email)->count();

    	 if($count > 0)
    	 {
    	 	return redirect()->back()->with('error', 'This email already exists.');
    	 }
    	 else{

    	 	$user = new User();
    	 	$user->name = $req->name;
    	 	$user->email = $req->email;
    	 	$user->password = Hash::make($req->password);
    	 	$user->save();
    	 	return redirect('/login');
    	 }

    } 

    function Login(Request $req)
    {
    	$req->validate([
    		'email' => 'required|email',
    		'password' => 'required',
    	]);

    	 $user = User::where('email', $req->email)->first();

    	 if($user==true && Hash::check($req->password, $user->password))
    	 {
    	 	$req->session()->put('user', $user);
    	 	return redirect('/');
    	 }
    	 else{
    	 	return redirect()->back()->with('error', 'Username or Password is incorrect');
    	 }

    } 


    function Logout()
    {
    	Session::pull('user');
    	return redirect('/login');
    }
}
