<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration {

	public function up()
	{
		Schema::create('sales', function(Blueprint $table) {
			$table->increments('id');
			$table->string('sale')->index();
			$table->decimal('price', 8,2)->index()->default('00.00');
			$table->date('to');
			$table->date('from');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('sales');
	}
}