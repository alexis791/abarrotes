<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categoria = \App\Categoria::select('id','categoria')->get();

		// echo $categoria;
		 return view('productos.index')->with('categorias',$categoria);
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
	public function store(Request $request)
	{
		$producto = new \App\Articulo;

		if( !empty($request->input('categoria')) && !empty($request->input('producto')) && !empty($request->input('precio')) && !empty($request->input('cantidad')))
		{
			$producto->id_categoria = $request->input('categoria');
			$producto->nombre = $request->input('producto');
			$producto->unidad_medida = $request->input('unidad_medida');
			$producto->precio = $request->input('precio');
			$producto->cantidad = $request->input('cantidad');

			if ($producto->save()) {
				return redirect('/productos')->with('mensaje','exito');
			} else {
				return redirect('/productos')->with('mensaje','error');
			}
		} else {
			return redirect('/productos')->with('mensaje','En necesario proporcionar todos los campos');
		}

		
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
