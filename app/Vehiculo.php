<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Predio extends Model
	{
		protected $table ='vehiculos';
    
		protected $primaryKey = 'patente';

		protected $fillable = array('marca','modelo','year','kilometraje','conductor');

		public function cdi_vehiculo()
		{
			$this->belongsTo('Cdi');
		}
	}
 ?> 