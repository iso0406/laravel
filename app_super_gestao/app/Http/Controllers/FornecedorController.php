<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

	public function index(){
		$fornecedor = [
			0 => ['nome' => 'Fornecedor 1', 'Status' => 'N', 'cnpj' => '0', 'ddd' => '11', 'telefone' => '0000-0000'],
			1 => ['nome' => 'Fornecedor 2', 'Status' => 'S', 'cnpj' => '0', 'ddd' => '21', 'telefone' => '0000-0000'],
			2 => ['nome' => 'Fornecedor 3', 'Status' => 'S', 'cnpj' => '0', 'ddd' => '32', 'telefone' => '0000-0000'],

	];
	//return view('app.fornecedor.index', compact('fornecedor'));

	echo isset($fornecedor[1]['cnpj']) ? 'CNPJ INFORMADO' : 'CNPJ Não informado';
	echo "<br>";
	echo empty($fornecedor[1]['cnpj']) ? 'CNPJ INFORMADO' : 'CNPJ Não informado';
	return view('app.fornecedor.index', compact('fornecedor'));
}
    //
}
