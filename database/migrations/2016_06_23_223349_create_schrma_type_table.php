<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchrmaTypeTable extends Migration {

	public function up()
	{
		Schema::create('schrma_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type')->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('schrma_type');
	}
}