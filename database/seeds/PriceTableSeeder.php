<?php

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('prices')->delete();

		// z44prices
		Price::create(array(
				'product_option_id' => 1,
				'dealer_price' => '499',
				'base_price' => '450',
				'map_price' => '799',
				'shop_price' => '699.95',
				'msrp' => '799'
			));
	}
}