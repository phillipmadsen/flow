<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	public function up()
	{
		Schema::create('locations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('contact_person')->nullable();
			$table->string('address_1')->nullable();
			$table->string('address_2')->nullable();
			$table->string('city')->nullable()->index();
			$table->string('state')->nullable()->index();
			$table->string('zipcode')->index();
			$table->string('nickname')->index();
			$table->string('hours_opening_mf')->nullable();
			$table->string('hours_closing_mf')->nullable();
			$table->string('hours_opening_sat')->nullable();
			$table->string('hours_closing_sat')->nullable();
			$table->string('hours_opening_sun')->nullable();
			$table->string('hours_closing_sun')->nullable();
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('public_email')->nullable();
			$table->string('support_email')->nullable();
			$table->integer('dealer_id')->unsigned()->index();
			$table->string('customer_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('locations');
	}
}