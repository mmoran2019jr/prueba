<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clasificacion;

class ClasificacionController extends Controller
{

	public function prueba(){
		$lista = Clasificacion::all();
		return $lista;
	}

}
