<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GeneroController extends Controller
{

    public function prueba(){
    	$lista = Genero::all();
    	return $lista;
    }

}
