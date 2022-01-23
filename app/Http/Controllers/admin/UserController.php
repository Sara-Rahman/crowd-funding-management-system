<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {

       return view('admin.admin-login');

    }
    public function checkIn(Request $req)
    {
        $userInfo=$req->except('_token');

        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.dashboard')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logged out.');
    }

    
    }

