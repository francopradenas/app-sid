 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;

class VehiculoSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		Vehiculo::create(['patente'=>'CXJY-24',
						'marca'=>'marca',
						'modelo'=>'modelo',
						'year'=>'year',
						'kilometraje'=>'kilometraje',
						'conductor'=>'conductor'
					   ]);
		
	}

}

?>