<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPostNumber(){
        return view('firstpost');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}

