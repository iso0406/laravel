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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@indexLogin');
Route::post('/contato', 'ContatoController@contato');
Route::get('/testeForm', 'TesteFormController@testeForm');
Route::get('/teste02', 'Teste02Controller@teste02Msg');
Route::get('/listProdutos', 'ProdutosController@listProdutos');



/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
