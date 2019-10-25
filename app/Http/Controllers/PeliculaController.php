<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculaController extends Controller
{

	public function prueba(){
		$lista = Pelicula::all();
		return $lista;
	}

}
