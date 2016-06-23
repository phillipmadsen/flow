<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductFeaturesTable extends Migration {

	public function up()
	{
		Schema::create('product_features', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('useicon')->default(0);
			$table->string('icon')->nullable();
			$table->integer('poid')->unsigned()->index();
			$table->integer('pfid')->unsigned()->index();
			$table->integer('pvid')->unsigned()->index();
			$table->string('feature_name')->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('product_features');
	}
}