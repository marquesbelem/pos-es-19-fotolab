<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login() {
        return view('login.index');
    }

    public function LoginSuccess() {
        return view('login.success');
    }
}
