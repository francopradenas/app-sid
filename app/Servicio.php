<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Servicio extends Model
	{
		protected $table ='servicios';

		protected $primaryKey ='id';

		protected $fillable = array('nombre','descripcion');

		public function cdi_productor()
		{
			$this->belongsTo('Usuario');
		}
	}
 ?> 