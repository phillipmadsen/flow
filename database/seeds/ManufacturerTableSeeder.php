<?php

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufacturerTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('manufacturers')->delete();

		// grace
		Manufacturer::create(array(
				'name' => 'Grace'
			));
	}
}