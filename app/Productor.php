<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Productor extends Model
	{
		protected $table ='productores';

		protected $primaryKey = 'id_productor';

		protected $fillable = array('id_productor','nombre','nombre_corto','zona');
		protected $hidden = array('created_at','updated_at');
		public function cdi_productor()
		{
			$this->belongsTo('Cdi');
		}
	}
 ?> 