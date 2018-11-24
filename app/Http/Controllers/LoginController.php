<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function isLoggedIn(Request $request)
    {
        $checkLogin = DB::table('users')->where(['email' => $request->input('user'), 'password' => $request->input('pass')])->get();
        if (count($checkLogin) > 0) {
            return redirect('/dashboard');
        } else {
            return back();
        }
    }
}
