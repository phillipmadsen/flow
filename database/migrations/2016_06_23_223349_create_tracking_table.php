<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrackingTable extends Migration {

	public function up()
	{
		Schema::create('tracking', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->default('UA');
			$table->string('value');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('tracking');
	}
}