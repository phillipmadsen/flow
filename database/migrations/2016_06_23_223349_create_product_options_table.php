<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductOptionsTable extends Migration {

	public function up()
	{
		Schema::create('product_options', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->index();
			$table->integer('price_id')->unsigned()->index();
			$table->integer('identifier_id')->unsigned()->index();
			$table->integer('details_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('product_options');
	}
}