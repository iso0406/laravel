<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteFormController extends Controller
{
    public function testeForm(){
    	return view('site.testeForm');
    }
}
