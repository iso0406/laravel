<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function login(Request $request){
		$login = $request->input('login');
		$senha = $request->input('senha');
		$token = $request->input('_token');

		if($login == "iso0406" && $senha == "123"){
			//SENDO REDIRECIONADO PARA VIEW E ENCAMINHANDO UMA VARIAVEL COM O NUMERO TOKEN
			return view('/home', compact('token'));
		}else{
			echo '<script type="text/javascript">
	alert("Acesso negado...");
	window.location="/";
</script>';

		}
	}
}
