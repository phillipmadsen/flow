<?php

use Illuminate\Database\Seeder;
use App\Models\ProductOption;

class ProductOptionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('product_options')->delete();

		// productoption
		ProductOption::create(array(
				'product_id' => 1,
				'price_id' => 1,
				'identifier_id' => 1,
				'details_id' => 1
			));
	}
}