<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricesTable extends Migration {

	public function up()
	{
		Schema::create('prices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('po_id')->unsigned()->index();
			$table->boolean('onsale')->index()->default(0);
			$table->boolean('is_promo')->index()->default(0);
			$table->decimal('dealer_price', 8,2)->nullable()->index()->default('00.00');
			$table->decimal('beginning_price', 8,2)->nullable()->default('00.00');
			$table->decimal('base_price', 8,2)->nullable()->default('00.00');
			$table->decimal('map_price', 8,2)->nullable()->default('00.00');
			$table->date('to')->nullable();
			$table->date('from')->nullable();
			$table->decimal('shop_price', 8,2)->nullable()->index()->default('00.00');
			$table->decimal('msrp', 8,2)->nullable()->default('00.00');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('prices');
	}
}