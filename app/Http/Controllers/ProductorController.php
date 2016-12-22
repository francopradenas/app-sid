<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Productor;

class ProductorController extends Controller {


public function __construct(){}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['data'=>Productor::all()],200);
		
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		if(!$request->input('id_productor')|| 
		   !$request->input('nombre') ||
		   !$request->input('nombre_corto') ||
		   !$request->input('zona'))
		{
			return response()->json(['mensaje'=>'','Faltan datos para procesar peticion','422'],422);
		}
		else
		{
				Productor::create($request->all());
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
		$productor = Productor::find($id);
		if(!$productor)
		{
			return response()->json(['mensaje:'=>'no se encuentra el productor','codigo'=>'404'],404);
		}
		else
		{
			return response()->json(['data'=>$productor],200);
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
		$productor = Productor::find($id);

		if(!$productor)
		{
			return response()->json(['mensaje:'=>'no se encuentra el productor','codigo'=>'404'],404);
		}
		else
		{
			if($metodo === 'PATCH')
			{
				$id_productor 	= $request->input('id_productor');
				$nombre 		= $request->input('nombre');
				$nombre_corto 	= $request->input('nombre_corto');
				$zona 			= $request->input('zona');

		if($nombre 		 !=null && $nombre 	      !=''){$productor->nombre       =$nombre;}
		if($nombre_corto !=null && $nombre_corto  !=''){$productor->nombre_corto =$nombre_corto;}
		if($zona 		 !=null && $zona	      !=''){$productor->zona 		 =$zona;}
		if($id_productor !=null  && $id_productor !=''){$productor->id_productor =$id_productor;}

				if($productor->save())
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
			$productor = Productor::find($id);

		if(!$productor)
		{
			return response()->json(['mensaje'=>'','nada encontrado para borrar','404'],404);
		}
		else
		{
			if($productor->delete())
			{
				return response()->json(['mensaje'=>'','productor eliminado','204'],200);
			}
			else
			{
				 return response()->json(['mensaje'=>'registro no pudo ser eliminado','codigo'=>'422'],422);
			}
		}
	}

}
