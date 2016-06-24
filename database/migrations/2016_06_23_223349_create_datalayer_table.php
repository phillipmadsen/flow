<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatalayerTable extends Migration {

	public function up()
	{
		Schema::create('datalayer', function(Blueprint $table) {
			$table->increments('id');
			$table->string('datalayer_reference');
			$table->string('value')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('datalayer');
	}
}