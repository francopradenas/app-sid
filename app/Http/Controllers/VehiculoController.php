<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Vehiculo;

class VehiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	return response()->json(['data'=>Vehiculo::all()],200);
	}

	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request	)
	{
		if(!$request->input('patente')|| 
		   !$request->input('marca') ||
		   !$request->input('modelo') ||
		   !$request->input('year') ||
		   !$request->input('kilometraje') ||
		   !$request->input('conductor'))
		{
			return response()->json(['mensaje'=>'','Faltan datos para procesar peticion','422'],422);
		}
		else
		{
				Vehiculo::create($request->all());
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
		$vehiculo = Vehiculo::find($id);
		if(!$vehiculo)
		{
			return response()->json(['mensaje:'=>'no se encuentra el vehiculo','codigo'=>'404'],404);
		}
		else
		{
			return response()->json(['data'=>$vehiculo],200);
		}

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$metodo = $request->method();
		$vehiculo = Vehiculo::find($id);

		if(!$vehiculo)
		{
			return response()->json(['mensaje:'=>'no se encuentra el vehiculo','codigo'=>'404'],404);
		}
		else
		{
			if($metodo === 'PATCH')
			{
				$patente 	 = $request->input('patente');
				$marca 	 	 = $request->input('marca');
				$modelo  	 = $request->input('modelo');
				$year    	 = $request->input('year');
				$kilometraje = $request->input('kilometraje');
				$conductor	 = $request->input('conductor');


			if($marca  		!= 	null && $marca      !=''){$vehiculo->marca 		 =$marca;}
			if($modelo 		!= 	null && $modelo     !=''){$vehiculo->modelo		 =$modelo;}
			if($year   		!= 	null && $year	    !=''){$vehiculo->year 		 =$year;}
			if($patente 	!=	null && $patente    !=''){$vehiculo->patente 	 =$patente;}
			if($kilometraje != 	null && $kilometraje!=''){$vehiculo->kilometraje =$kilometraje;}
			if($conductor 	!= 	null && $conductor  !=''){$vehiculo->conductor	 =$conductor;}


				if($vehiculo->save())
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
			$vehiculo = Vehiculo::find($id);

		if(!$vehiculo)
		{
			return response()->json(['mensaje'=>'','nada encontrado para borrar','404'],404);
		}
		else
		{
			if($vehiculo->delete())
			{
				return response()->json(['mensaje'=>'','vehiculo eliminado','204'],200);
			}
			else
			{
				 return response()->json(['mensaje'=>'registro no pudo ser eliminado','codigo'=>'422'],422);
			}
		}
	}

}
