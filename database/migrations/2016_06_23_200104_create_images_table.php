<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->text('original_name')->nullable();
			$table->text('filename')->nullable();
			$table->text('catalog_path')->nullable();
			$table->text('grid_path')->nullable();
			$table->text('prod_thumb_path')->nullable();
			$table->text('header_image_path')->nullable();
			$table->text('postimage_path')->nullable();
			$table->text('gravatar_path')->nullable();
			$table->text('full_path')->nullable();
			$table->text('icon_path')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}