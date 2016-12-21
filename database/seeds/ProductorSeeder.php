 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Productor;

class ProductorSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		Productor::create(['id_productor'=>'3075',
						'nombre'=>'SOC.AGRIC.MAD.Y FORESTAL MAGAFOR LT',
						'nombre_corto'=>'MAGAFOR'
					   ]);
		
	}

}

?>