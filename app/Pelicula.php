<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
	protected $table = 'peliculas';
	protected $fillable = ['titulo', 'descripcion', 'duracion', 'fechaEstreno', 'idGenero', 'idClasificacion'];
}
