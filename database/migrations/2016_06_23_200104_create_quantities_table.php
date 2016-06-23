<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuantitiesTable extends Migration {

	public function up()
	{
		Schema::create('quantities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('poid')->unsigned();
			$table->bigInteger('quantity_on_hand')->index()->default('0');
			$table->bigInteger('quantity_available')->index()->default('0');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('quantities');
	}
}