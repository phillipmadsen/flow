<?php

use Illuminate\Database\Seeder;
use App\Models\ProductOption;

class ProductOptionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('product_option')->delete();

		// productoption
		ProductOption::create(array(
				'product_id' => 1,
				'category_id' => 1,
				'price_id' => 1,
				'identifier_id' => 1,
				'mid' => 1,
				'did' => 1
			));
	}
}