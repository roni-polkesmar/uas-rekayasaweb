<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register() {
        return view('register');
    }

    function login() {
        return view('login');
    }
}
