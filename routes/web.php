<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('App\Http\Controllers')
->group(function () {
    Route::get('/', 'HomeController@Home');

    Route::group(['prefix' => 'usuario'], function () {
        Route::get('/perfil', 'Usuario@obterDadosPerfil');
        
        Route::group(['prefix' => 'fotografo'], function () {
            Route::get('/listar', 'Usuario@listarFotografo');
        });
        
    });
    
    Route::get('/signin', 'LoginController@Login');
    Route::post('/signin/authenticate', 'LoginController@autenticarUsuario');
    
    Route::get('/register', 'RegisterController@Register');
});