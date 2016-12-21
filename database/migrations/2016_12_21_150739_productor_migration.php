<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductorMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productores', function(Blueprint $table)
		{
			$table->integer('id_productor');
			$table->primary('id_productor');
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
		Schema::drop('productores');
	}

}
