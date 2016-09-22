<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {

	protected $fillable =  ['id_categoria', 'nombre', 'unidad_medida', 'precio','cantidad', 'created_at', 'updated_at'];
}
