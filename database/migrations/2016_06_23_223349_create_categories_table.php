<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_option_id')->unsigned()->index();
			$table->string('title')->index();
			$table->string('slug')->unique();
			$table->string('meta_description', 160)->nullable();
			$table->text('description')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}