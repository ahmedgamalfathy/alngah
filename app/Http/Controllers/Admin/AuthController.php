<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        if (auth()->check()){
            //login
            return redirect()->route('admin.dashboard');
        }else{
            //guest
            return view('admin.login');
        }
    }
}
