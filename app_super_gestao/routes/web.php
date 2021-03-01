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

/*
Route::get('/', function () {
    //return view('welcome');
    return "Página Principal!!!";
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreNosController@sobre')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login';  })->name('site.login');
/*
//nome, assunto, mensagem
Route::get('/contato/{nome}/{categoria_id?}/', 
	function(
		string $nome = 'Nome não informado', 
		int $categoria_id = 1
	){
	echo "Estamos aqui: $nome - $categoria_id";
	}
)->where('categoria_id' , '[0-9]+')->where('nome', '[A-Za-z]+');


*/

		Route::prefix('/app')->group( function(){  
		Route::get('/cliente', function(){ return 'Cliente'; })->name('app.cliente');
		Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
		Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

//comando redirect
//Route::redirect('/rota1', '/rota2');
/*
Route::get('/rota1', function(){
echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function(){ 
	return redirect()->route('site.rota1');
})->name('site.rota2');


*/
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback( function(){
	echo "A rota acessada não existe. Clique <a href='".route('site.index')."'>AQUI</a> para voltar a página principal";
});


/*
Route::get('/sobrenos', function () {
    //return view('welcome');
    return "Página Sobre nos";
});


Route::get('/contato', function () {
    //return view('welcome');
    return "Página Contato";
});

*/