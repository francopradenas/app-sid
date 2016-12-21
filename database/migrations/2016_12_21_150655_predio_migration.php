<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PredioMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('predios', function(Blueprint $table)
		{
			$table->integer('id_predio');
			$table->primary('id_predio');
			$table->string('nombre');
			$table->string('nombre_corto');
			$table->string('zona');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('predios');
	}

}
