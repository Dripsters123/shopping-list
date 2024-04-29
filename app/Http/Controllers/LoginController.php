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
    //Šitā lietiņa dabū email un password
    $credentials = $request->only('email', 'password');
    // Karoč authentificē user un ifs vienkārši pārbauda , ja logins ir veiksmīgs tad redirectos
    if (Auth::attempt($credentials)) {
       
        return redirect()->intended('/shoplist');
    }
}
}
