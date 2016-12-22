<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
Use App\Cdi;

class CdiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['data'=>Cdi::all()],200);
	}

	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(!$request->input('inventariador') 	|| 
		   !$request->input('fecha') 			||
		   !$request->input('id_predio') 		||
		   !$request->input('volumen_programa') ||
		   !$request->input('volumen_medido') 	||
		   !$request->input('intervencion') 	||
		   !$request->input('modalidad') 		||
		   !$request->input('requerimiento') 	||
		   !$request->input('condicion') 		||
		   !$request->input('observacion') 		||
		   !$request->input('acceso_predio') 	||
		   !$request->input('km_ini')			||
		   !$request->input('km_fin') 			||
		   !$request->input('recorrido') 		||
		   !$request->input('peajes') 			||
		   !$request->input('guia') 			||
		   !$request->input('monto') 			||
		   !$request->input('detalle_guia') 	||
		   !$request->input('boleta') 			||
		   !$request->input('valor') 			||
		   !$request->input('detalle_boleta') 	||
		   !$request->input('id_productor') 	||
		   !$request->input('tiene_acta') 		||
		   !$request->input('ruma_cerrada') 	||
		   !$request->input('equipo_madereo') 	||
		   !$request->input('fecha_recepcion') 	||
		   !$request->input('destino') 			||
		   !$request->input('memo_firmado') 	||
		   !$request->input('presencia_capataz')||
		   !$request->input('con_despacho') 	||
		   !$request->input('con_produccion') 	||
		   !$request->input('ubicacion')		||
		   !$request->input('tarros_pintura'))
		{
			return response()->json(['mensaje'=>'','Faltan datos para procesar peticion','422'],422);
		}
		else
		{
				Cdi::create($request->all());
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
		$cdi = Cdi::find($id);
		if(!$cdi)
		{
			return response()->json(['mensaje:'=>'no se encuentra el cdi','codigo'=>'404'],404);
		}
		else
		{
			return response()->json(['data'=>$cdi],200);
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
		$cdi = Cdi::find($id);

		if(!$cdi)
		{
			return response()->json(['mensaje:'=>'no se encuentra el cdi','codigo'=>'404'],404);
		}
		else
		{
			if($metodo === 'PATCH')
			{
				$inventariador 	   = $request->input('inventariador');
				$fecha 	 	 	   = $request->input('fecha');
				$id_predio  	   = $request->input('id_predio');
				$volumen_programa  = $request->input('volumen_programa');
				$volumen_medido	   = $request->input('volumen_medido');
				$intervencion	   = $request->input('intervencion');
				$modalidad 		   = $request->input('modalidad');
				$requerimiento     = $request->input('requerimiento');
				$condicion    	   =$request->input('condicion');
				$observacion 	   = $request->input('observacion');
				$acceso_predio 	   =$request->input('acceso_predio');
				$km_ini 		   =$request->input('km_ini');
				$km_fin 		   =$request->input('km_fin');
				$recorrido 		   =$request->input('recorrido');
				$peajes    		   = $request->input('peajes');
				$guia 			   = $request->input('guia');
				$monto 			   =$request->input('monto');
				$detalle_guia 	   =$request->input('detalle_guia');
				$boleta 		   = $request->input('boleta');
				$valor 			   =$request->input('valor');
				$detalle_boleta    =$request->input('detalle_boleta');
				$id_productor 	= $request->input('id_productor');
				$tiene_acta 	=$request->input('tiene_acta');
				$ruma_cerrada 	=$request->input('ruma_cerrada');
				$equipo_madereo =$request->input('equipo_madereo');
				$fecha_recepcion =$request->input('fecha_recepcion');
				$destino =$request->input('destino');
				$memo_firmado=$request->input('memo_firmado');
				$presencia_capataz =$request->input('presencia_capataz');
				$con_despacho = $request->input('con_despacho');
				$con_produccion =$request->input('con_produccion');
				$ubicacion =$request->input('ubicacion');
				$tarros_pintura=$request->input('tarros_pintura');




		if($fecha     		 !=null && $fecha     		 !=''){$cdi->fecha   =$fecha;}
		if($id_predio 		 !=null && $id_predio 		 !=''){$cdi->id_predi=$id_predio;}
		if($volumen_programa !=null && $volumen_programa !=''){$cdi->volumen_programa =     $volumen_programa;}

		if($inventariador 	 !=null && $inventariador    !=''){$cdi->inventariador=$inventariador;}
		if($volumen_medido   !=null && $volumen_medido   !=''){$cdi->volumen_medido =$volumen_medido;}
		if($intervencion 	 !=null && $intervencion     !=''){$cdi->intervencion	 =$intervencion;}

		if($modalidad     !=null && $modalidad 	   !=''){$cdi->modalidad =$modalidad;}
		if($requerimiento !=null && $requerimiento !=''){$cdi->requerimiento =$requerimiento;}
		if($condicion     != null && $condicion    !=''){$cdi->condicion = $condicion;}
		if($observacion   != null && $observacion  !=''){$cdi->observacion = $observacion;}
		if($acceso_predio !=null && $acceso_predio !=''){$cdi->acceso_predio = $acceso_predio;}
		if($km_ini 		  !=null && $km_ini		   !=''){$cdi->km_ini=$km_ini;}
		if($km_fin 		  !=null && $km_fin        !=''){$cdi->km_fin=$km_fin;}
		if($recorrido 	  !=null && $recorrido){$cdi->recorrido =$recorrido;}
		if($peajes		  != null && $peajes       !=''){$cdi->peajes= $peajes;}
		if($guia 		  !=null && $guia 		   !=''){$cdi->guia =$guia;}
		if($monto 		  !=null && $monto		   !=''){$cdi->monto =$monto;}
		if($detalle_guia  !=null && $detalle_guia  !=''){$cdi->detalle_guia=$detalle_guia;}
		if($boleta  	  !=null && $boleta        !=''){$cdi->boleta=$boleta;}
		if($valor         !=null && $valor  	   !=''){$cdi->valor=$valor;}
		if($detalle_boleta !=null && $detalle_boleta  !=''){$cdi->detalle_boleta=$detalle_boleta;}
		if($id_productor   !=null && $id_productor 	  !=''){$cdi->id_productor=$id_productor;}
		if($tiene_acta     !=null && $tiene_acta 	  !=''){$cdi->tiene_acta =$tiene_acta;}
		if($ruma_cerrada   !=null && $ruma_cerrada 	  !=''){$cdi->ruma_cerrada=$ruma_cerrada;}
		if($equipo_madereo !=null && $equipo_madereo  !=''){$cdi->equipo_madereo=$equipo_madereo;}
		if($fecha_recepcion!=null && $fecha_recepcion !=''){$cdi->fecha_recepcion =$fecha_recepcion;}
		if($destino        !=null && $destino		  !=''){$cdi->destino->$destino;}
		if($memo_firmado   !=null && $memo_firmado    !=''){$cdi->memo_firmado=$memo_firmado;}
		if($presencia_capataz !=null && $presencia_capataz!=''){$cdi->presencia_capataz=$presencia_capataz;}
		if($con_despacho 	  !=null && $con_despacho     !=''){$cdi->con_despacho=$con_despacho;}
		if($con_produccion    !=null && $con_produccion   !=''){$cdi->con_produccion=$con_produccion;}
		if($ubicacion         !=null && $ubicacion        !=''){$cdi->ubicacion=$ubicacion;}
		if($tarros_pintura    !=null && $tarros_pintura   !=''){$cdi->tarros_pintura=$tarros_pintura;}



				if($cdi->save())
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
			$cdi = Cdi::find($id);

		if(!$cdi)
		{
			return response()->json(['mensaje'=>'','nada encontrado para borrar','404'],404);
		}
		else
		{
			if($cdi->delete())
			{
				return response()->json(['mensaje'=>'','cdi eliminado','204'],200);
			}
			else
			{
				 return response()->json(['mensaje'=>'registro no pudo ser eliminado','codigo'=>'422'],422);
			}
		}
	}

}
