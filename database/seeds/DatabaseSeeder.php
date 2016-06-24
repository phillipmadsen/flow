<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('ProductTableSeeder');
		$this->command->info('Product table seeded!');

		$this->call('ProductFeatureTableSeeder');
		$this->command->info('ProductFeature table seeded!');

		$this->call('PriceTableSeeder');
		$this->command->info('Price table seeded!');

		$this->call('IdsTableSeeder');
		$this->command->info('Ids table seeded!');

		$this->call('ProductOptionTableSeeder');
		$this->command->info('ProductOption table seeded!');

		$this->call('ManufacturerTableSeeder');
		$this->command->info('Manufacturer table seeded!');

		$this->call('DetailsTableSeeder');
		$this->command->info('Details table seeded!');

		$this->call('BrandTableSeeder');
		$this->command->info('Brand table seeded!');

		$this->call('QuantityTableSeeder');
		$this->command->info('Quantity table seeded!');

		$this->call('SeoTableSeeder');
		$this->command->info('Seo table seeded!');
	}
}