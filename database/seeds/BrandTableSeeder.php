<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('brands')->delete();

		// grace
		Brand::create(array(
				'brand' => 'The Grace Company',
				'info' => 'Manufacturing',
				'product_option_id' => 1
			));
	}
}