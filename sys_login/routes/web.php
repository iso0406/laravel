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

Route::get('/', function () {return view('index'); });
Route::post('/login', 'LoginController@login')->name('login');

//REGISTRAR NO SISTEMA
Route::get('/registrar', function () {return view('registrarLogin'); });
Route::post('/registrarAcesso', 'RegistrarAcessoController@registrarAcesso')->name('registrarAcesso');


Route::get('/registrarUsuario', function () {return view('registrarUsuario'); });
Route::post('/registrarUsuario', 'RegistrarUsuarioController@registrarUsuario')->name('registrarUsuario');

//PÁGINA DE REDIRECIONAMENTO
Route::get('/home', function () {return view('home'); });

