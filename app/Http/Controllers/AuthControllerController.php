<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllerController extends Controller
{
    // direct to login page
    public function loginPage()
    {
        return view('login');
    }

    // redirect to register page
    public function registerPage()
    {
        return view('register');
    }
}