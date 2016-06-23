<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
			$table->increments('id');
			$table->string('brand')->index();
			$table->string('info')->nullable()->default('The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('brands');
	}
}
