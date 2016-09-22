<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('crear_articulo',function(){
// 	$articulo = new \App\Articulo;

// 	$articulo->id_categoria = 1;
// 	$articulo->nombre = 'tomate';
// 	$articulo->unidad_medida = 'kg';
// 	$articulo->precio = 15.90;
// 	$articulo->cantidad = 96;

// 	$articulo->save();
// });

// Route::get('crear_categoria',function(){
// 	$categoria = new \App\Categoria;

// 	$categoria->categoria = "verduras";

// 	$categoria->save();
// });

// Route::get('obtener_articulos',function(){
// 	$articulos =  \App\Articulo::where('id_categoria','=','1')->first();

// 	echo "<strong> ".$articulos->nombre." </strong>";
// });

Route::get('/','CategoriasController@index');
Route::get('categorias','CategoriasController@index');
Route::post('categorias','CategoriasController@store');
Route::get('categorias/{id}/delete','CategoriasController@destroy');
Route::get('productos','ProductosController@index');
Route::post('productos','ProductosController@store');
Route::get('informes','InformeController@index');
Route::get('informes/{id}/edit','InformeController@edit');
Route::get('informes/{id}/delete','InformeController@destroy');
Route::put('informes/{id}/update','InformeController@update');

Route::get('informes/{id}/informes',function(){
	return redirect('/informes');
});
Route::get('informes/{id}/productos',function(){
	return redirect('/productos');
});
Route::get('informes/{id}/categorias',function(){
	return redirect('/categorias');
});