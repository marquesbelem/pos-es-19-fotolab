<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login() 
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('login.index');
    }

    public function logout() 
    {
        if (!Auth::check()) {
            return redirect('/signin');
        }

        Auth::logout();

        return redirect('/');
    }

    public function autenticarUsuario()
    {
        $params = request()->all();
        
        $validation = Validator::make($params, [
            'email' => 'required|string',
            'senha' => 'required|string'
        ]);

        if ($validation->fails()) {
            $responseContent = [
                'status' => 'error',
                'data' => $validation->errors()
            ];
            return response($responseContent, 403);
        }

        $authenticationInfo = [
            'email' => $params['email'],
            'password' => $params['senha']
        ];

        if (!Auth::attempt($authenticationInfo)) {
            abort(403, "E-mail ou senha inválido!");
        }

        return view('home.index');
    }
}
