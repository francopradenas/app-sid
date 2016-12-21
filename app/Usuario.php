<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Servicio extends Model
	{
		protected $table ='usuarios';

		protected $primaryKey ='rut';

		protected $fillable = array('nombre','paterno','materno','id_servicio');

		public function cdi_productor()
		{
			$this->hasMany('Cdi');
		}

		public function servicio_usuario()
		{
			$this->hasMany('Usuario');
		}
	}
 ?> 