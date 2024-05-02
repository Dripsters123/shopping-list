<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
public function showLoginForm()
{
    if (Auth::check()) {
        return redirect('/shoplist');
    }
    return view('auth.login');
}
  public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
   
    if (Auth::attempt($credentials)) {
       
        return redirect()->intended('/shoplist');
    }
}
}
