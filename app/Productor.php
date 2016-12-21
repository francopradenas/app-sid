<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Predio extends Model
	{
		protected $table ='productores';

		protected $primaryKey = 'id';

		protected $fillable = array('nombre','nombre_corto','zona');

		public function cdi_productor()
		{
			$this->belongsTo('Cdi');
		}
	}
 ?> 