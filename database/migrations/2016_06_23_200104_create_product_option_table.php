<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductOptionTable extends Migration {

	public function up()
	{
		Schema::create('product_option', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->index();
			$table->integer('category_id')->unsigned()->index();
			$table->integer('price_id')->unsigned()->index();
			$table->integer('identifier_id')->unsigned()->index();
			$table->integer('mid')->unsigned()->index();
			$table->integer('did')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('product_option');
	}
}