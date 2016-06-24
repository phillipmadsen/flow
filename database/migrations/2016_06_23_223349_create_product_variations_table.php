<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductVariationsTable extends Migration {

	public function up()
	{
		Schema::create('product_variations', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_option_id')->unsigned()->index();
			$table->string('attribute_name');
			$table->text('product_attribute_value');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('product_variations');
	}
}