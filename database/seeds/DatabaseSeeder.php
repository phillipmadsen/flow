<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('ProductTableSeeder');
		$this->command->info('Product table seeded!');

		$this->call('IdsTableSeeder');
		$this->command->info('Ids table seeded!');

		$this->call('ProductOptionTableSeeder');
		$this->command->info('ProductOption table seeded!');
	}
}