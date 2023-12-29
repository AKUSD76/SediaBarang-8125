<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function post_login(Request $request)
    {
    	if (auth()->attempt($request->only('email','password'))) {
    		return redirect('/posts');
    	} else {
    		return "gagal";
    	}
    }
    public function logout()
    {
    	auth()->logout();
    	return redirect('/');
    }
}
