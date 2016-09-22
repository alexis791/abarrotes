<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class InformeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = \App\Articulo::all();
		return view('informes.index')->with('productos',$productos);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$producto = \App\Articulo::select('categorias.*','articulos.*')
		->join('categorias','articulos.id_categoria','=','categorias.id')
		->where('articulos.id','=',$id)
		->get();

		return view('informes.editar')->with('productos',$producto);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{ 

		if( !empty($request->input('categoria')) && !empty($request->input('producto')) && !empty($request->input('precio')) && !empty($request->input('cantidad')))
		{	
			$producto = \App\Articulo::find($id)
				->update(['id_categoria'=>$request->input('categoria'),
				'nombre'=>$request->input('producto'),
				'unidad_medida'=>$request->input('unidad_medida'),
				'precio'=>$request->input('precio'),
				'cantidad'=>$request->input('cantidad')]);
			

			if ($producto) {
					return redirect('/informes');
				}
		// 	$producto->id_categoria = $request->input('categoria');
		// 	$producto->nombre = $request->input('producto');
		// 	$producto->unidad_medida = $request->input('unidad_medida');
		// 	$producto->precio = $request->input('precio');
		// 	$producto->cantidad = $request->input('cantidad');

		// 	if ($producto->save()->where('id','=',$id)) {
		// 		return redirect('/productos')->with('mensaje','exito');
		// 	} else {
		// 		return redirect('/productos')->with('mensaje','error');
		// 	}
		// } else {
		// 	return redirect('/productos')->with('mensaje','En necesario proporcionar todos los campos');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = \App\Articulo::find($id);

		if($producto->delete()){

			return "El articulo ".$producto->nombre." se elimino correctamente ";

		} else {

			return "Error al intentar borrar el articulo";
		}
	}

}
