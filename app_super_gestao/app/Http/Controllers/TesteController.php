<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
    	//echo "A soma dos valores de $p1 e $p2 é: " . ($p1 + $p2);
    	//return view('site.testeParametro', ['p1' => $p1, 'p2' => $p2]);	//Array \associativo
    	return view('site.testeParametro', compact('p1', 'p2'));
    	

    }
}
