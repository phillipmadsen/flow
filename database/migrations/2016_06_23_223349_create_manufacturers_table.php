<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufacturersTable extends Migration {

	public function up()
	{
		Schema::create('manufacturers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('manufacturers');
	}
}