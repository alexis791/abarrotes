<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = \App\Categoria::all();
		return view('categorias.categoria')->with('categorias',$categorias);
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
		$categoria = new \App\Categoria;

		if(!empty($request->input('categoria'))){

			$categoria->categoria = $request->input('categoria');

			if($categoria->save()){
					return redirect('/categorias')->with('mensaje','exito');
				} else {
					return redirect('/categorias')->with('mensaje','error');
				}
			} else {
				return redirect('/categorias')->with('mensaje','Error al guardar la categoria');
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
		$categoria = \App\Categoria::find($id);

		if ($categoria->delete()) {
			return "La categoria ".$categoria->categoria." fue eliminada correctamente";
		} else {
			return "Error al intentar borrar categoria";
		}
		 
	}

}
