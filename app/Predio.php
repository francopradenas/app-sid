<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Predio extends Model
	{
		protected $table ='predios';

		protected $primaryKey = 'id_predio';

		protected $fillable = array('id_predio','nombre','nombre_corto','zona');

		protected $hidden = ['created_at','updated_at'];

		public function cdi_predio()
		{
			$this->belongsTo('Cdi');
		}
	}
 ?> 