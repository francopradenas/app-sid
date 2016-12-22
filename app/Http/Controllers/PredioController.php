<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Predio;

class PredioController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth.basic');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['data'=>Predio::all()],200);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(!$request->input('id_predio') || !$request->input('nombre') ||
		   !$request->input('zona'))
			{
				return response()->json(['mensaje'=>'','valores no generados','422'],422);
			}	
			else
			{
				Predio::create($request->all());
				return response()->json(['mensaje'=>'Registro ingresado correctamente','codigo'=>'201'],201);
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
		$predio = Predio::find($id);
		if(!$predio)
		{
			return response()->json(['mensaje:'=>'no se encuentra el predio','codigo'=>'404'],404);
		}
		else
		{
			return response()->json(['data'=>$predio],200);
		}

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$metodo = $request->method();
		$predio = Predio::find($id);

		if(!$predio)
		{
			return response()->json(['mensaje:'=>'no se encuentra el predio','codigo'=>'404'],404);
		}
		else
		{
			if($metodo === 'PATCH')
			{
				$id_predio = $request->input('id_predio');
				$nombre = $request->input('nombre');
				$nombre_corto = $request->input('nombre_corto');
				$zona = $request->input('zona');

				if($nombre != null && $nombre != ''){$predio->nombre =$nombre;}
				if($nombre_corto != null && $nombre_corto!=''){$predio->nombre_corto=$nombre_corto;}
				if($zona != null && $zona!=''){$predio->zona = $zona;}
				if($id_predio !=null && $id_predio !=''){$predio->id_predio =$id_predio;}

				if($predio->save())
				{
					return response()->json(['mensaje'=>'Registro actualizado correctamente','codigo'=>'201'],201);
				}
				else
				{
					return response()->json(['mensaje'=>'','registro no actualizado','422'],422);
				}

			}
			else
			{
				 return response()->json(['mensaje'=>'favor utiliza formato patch','codigo'=>'422'],422);
			}

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
		//	
	}

}
