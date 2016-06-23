<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealersTable extends Migration {

	public function up()
	{
		Schema::create('dealers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('pid')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->string('dealer')->index();
			$table->integer('location_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('dealers');
	}
}