 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Predio;

class PredioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		Predio::create(['id_predio'=>'10053',
						'nombre'=>'LA OLLA',
						'nombre_corto'=>'LA OLLA'
					   ]);
		
	}

}

?>