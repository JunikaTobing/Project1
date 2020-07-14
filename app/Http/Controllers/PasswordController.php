<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
class PasswordController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('preventBackHistory');
}
public function showChangePasswordForm(){
  return view('auths.changepassword');
}
public function changePassword(Request $request){
  if(!(Hash::check($request->get('current-password'),Auth::user()->password))){
    return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
  }
  if(strcmp($request->get('current-password'),$request->get('new-password'))==0){
    return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
  }
  $user=Auth::user();
  $user->password = bcrypt($request->get('new-password'));
  $user->save();
  return redirect()->back()->with("success","Password have changed ");
}
}
