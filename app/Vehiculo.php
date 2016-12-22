<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Vehiculo extends Model
	{
		protected $table ='vehiculos';
    
		protected $primaryKey = 'patente';

		protected $fillable = array('patente','marca','modelo','year','kilometraje','conductor');

		protected $hidden = array('created_at','updated_at');

		public function cdi_vehiculo()
		{
			$this->belongsTo('Cdi');
		}
	}
 ?> 