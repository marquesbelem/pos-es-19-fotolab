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

Route::get('/', 'App\Http\Controllers\HomeController@Home');
Route::get('/perfil-fotografo', 'App\Http\Controllers\HomeController@PerfilFotografo');

Route::get('/login', 'App\Http\Controllers\LoginController@Login');
Route::post('/login', 'App\Http\Controllers\LoginController@LoginSuccess');

Route::get('/register', 'App\Http\Controllers\RegisterController@Register');
