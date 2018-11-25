<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function isLoggedIn(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('user'), 'password' => $request->input('pass')])) {
            return redirect('/dashboard');
        }else{
            return back();
        }
    }
}
