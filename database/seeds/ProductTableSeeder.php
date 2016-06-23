<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('products')->delete();

		// testpruducts
		Product::create(array(
				'poid' => 1
			));
	}
}