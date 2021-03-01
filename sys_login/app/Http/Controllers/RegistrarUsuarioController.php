<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistrarUsuarioModel;

class RegistrarUsuarioController extends Controller
{
	public function registrarUsuario(Request $request){

		$registrarUsuario = new RegistrarUsuarioModel();
		$registrarUsuario->nome = $request->input('nome');
		$registrarUsuario->email = $request->input('email');
		
    	//print_r($registrarUsuario->getAttributes());
		$registrarUsuario->save();

		echo '<script type="text/javascript">
		alert("Registro de usuario efetuado com sucesso !!!");
		window.location="/";
		</script>';

	}
}
