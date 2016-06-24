<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_option_id')->unsigned()->index();
			$table->string('brand')->index();
			$table->text('info')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('brands');
	}
}