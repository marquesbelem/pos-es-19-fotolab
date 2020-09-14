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

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/perfil-fotografo', 'HomeController@PerfilFotografo');
    });
    
    Route::get('/post', 'LoginController@Login');
    Route::post('/login', 'LoginController@LoginSuccess');
    
    Route::get('/register', 'RegisterController@Register');    
});