<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistrarAcesso;

class RegistrarAcessoController extends Controller
{
	public function registrarAcesso(Request $request){
		$registrarAcesso = new RegistrarAcesso();
		$registrarAcesso->nome = $request->input('nome');
		$registrarAcesso->email = $request->input('email');
		$registrarAcesso->login = $request->input('login');
		$registrarAcesso->senha = $request->input('senha');

		$registrarAcesso->save();

		echo '<script type="text/javascript">
	alert("Registro Efetuado com sucesso !!!");
	window.location="/";</script>';

	}
    
}
