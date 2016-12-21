<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Usuario extends Model
	{
		protected $table ='usuarios';

		protected $primaryKey ='rut';

		protected $fillable = array('nombre','paterno','materno','id_servicio');

		public function cdi_usuario()
		{
			$this->hasMany('Cdi');
		}

		public function servicio_usuario()
		{
			$this->hasMany('Usuario');
		}
	}
 ?> 