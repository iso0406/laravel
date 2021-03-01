<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
    	/*
    	var_dump($_POST);
    	return view('site.contato');
    	*/
    	echo "TOKEN: " . $request->input('_token');
    	echo "<br>";
    	return view('site.contato');
    }
}
