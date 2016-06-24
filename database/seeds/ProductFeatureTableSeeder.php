<?php

use Illuminate\Database\Seeder;
use App\Models\ProductFeature;

class ProductFeatureTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('product_features')->delete();

		// feature1
		ProductFeature::create(array(
				'product_option_id' => 1,
				'feature_name' => 'new wood',
				'useicon' => 1
			));

		// feature2
		ProductFeature::create(array(
				'product_option_id' => 1,
				'feature_name' => 'second one is also wood',
				'useicon' => 1
			));
	}
}