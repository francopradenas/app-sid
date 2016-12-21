<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CdiMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cdi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('inventariador');
			$table->date('fecha');
			$table->integer('id_predio');
			$table->foreign('id_predio')->references('id_predio')->on('predios');
			$table->string('volumen_programa');
			$table->string('volumen_medido');
			$table->string('intervencion');
			$table->string('modalidad');
			$table->string('requerimiento');
			$table->string('condicion');
			$table->string('observacion');
			$table->string('acceso_predio');
			$table->string('km_ini');
			$table->string('km_fin');
			$table->string('recorrido');
			$table->string('peajes');
			$table->string('guia');
			$table->string('monto');
			$table->string('detalle_guia');
			$table->string('boleta');
			$table->string('valor');
			$table->string('detalle_boleta');
			$table->integer('id_productor');
			$table->foreign('id_productor')->references('id_productor')->on('productores');
			$table->string('tiene_acta');
			$table->string('ruma_cerrada');
			$table->string('equipo_madereo');
			$table->string('fecha_recepcion');
			$table->string('destino');
			$table->string('memo_firmado');
			$table->string('presencia_capataz');
			$table->string('con_despacho');
			$table->string('con_produccion');
			$table->string('ubicacion');
			$table->string('tarros_pintura');
			$table->timestamps();
		}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cdi');
	}

}
