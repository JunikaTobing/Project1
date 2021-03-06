<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class AuthController extends Controller
{
    public function login(){
    	return view('auths.login');
    }
    public function postlogin(Request $request){
    	//dd($request->all());
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('/absensi');
    	}
    	return redirect('/login');
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
