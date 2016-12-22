<?php namespace app;

use Illuminate\Database\Eloquent\Model;

	class Cdi extends Model
	{
		protected $table ='cdi';

		protected $primaryKey = 'id';

		protected $fillable = array( 'inventariador',
									 'fecha',
									 'zona',
									 'id_predio',
									 'volumen_programa',
									 'volumen_medido',
									 'intervencion',
									 'modalidad',
									 'requerimiento',
									 'condicion',
									 'observacion',
									 'acceso_predio',
									 'km_ini',
									 'km_fin',
									 'recorrido',
									 'peajes',
									 'guia',
									 'monto',
									 'detalle',
									 'boleta',
									 'valor',
									 'detalle',
									 'id_productor',
									 'tiene_acta',
									 'ruma_cerrada',
									 'equipo_madereo',
									 'fecha_recepcion',
									 'destino',
									 'memo_firmado',
									 'presencia_capataz',
									 'con_despacho',
									 'con_produccion',
									 'ubicacion',
									 'tarros_pintura',
									 );
		protected $hidden = array("created_at","updated_at");

		public function predios()
		{
			$this->hasMany('Predio');
		}

		public function productores()
		{
			$this->hasMany('Productor');
		}

		public function vehiculos()
		{
			$this->hasMany('Vehiculo');
		}
	}
 ?> 
