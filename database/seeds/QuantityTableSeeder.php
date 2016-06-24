<?php

use Illuminate\Database\Seeder;
use App\Models\Quantity;

class QuantityTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('quantities')->delete();

		// z44stock
		Quantity::create(array(
				'product_option_id' => 1,
				'quantity_on_hand' => 25,
				'quantity_available' => 25
			));
	}
}