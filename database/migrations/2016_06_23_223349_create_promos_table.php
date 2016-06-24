<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromosTable extends Migration {

	public function up()
	{
		Schema::create('promos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('promo')->index();
			$table->decimal('price', 8,2)->nullable()->default('00.00');
			$table->date('to')->nullable();
			$table->date('from')->nullable();
			$table->boolean('coupon')->default(0);
			$table->string('coupon_code')->unique()->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('promos');
	}
}