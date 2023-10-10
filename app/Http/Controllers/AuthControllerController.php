<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllerController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function registerPage()
    {
        return view('register');
    }
}