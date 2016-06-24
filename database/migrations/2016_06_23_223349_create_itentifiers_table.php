<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItentifiersTable extends Migration {

	public function up()
	{
		Schema::create('itentifiers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_option_id')->unsigned()->index();
			$table->string('model')->unique()->nullable();
			$table->text('model_info')->nullable();
			$table->string('sku')->unique()->nullable();
			$table->text('sku_info')->nullable();
			$table->string('asin')->unique()->nullable();
			$table->string('mpn')->unique()->nullable();
			$table->text('mpn_info')->nullable();
			$table->string('gtin13', 13)->nullable();
			$table->text('gtin13_info')->nullable();
			$table->string('relatedto')->nullable()->default('isRelatedTo');
			$table->enum('itemcondition', array('NewCondition', 'RefurbishedCondition', 'UsedCondition', 'DamagedCondition', ''))->nullable();
			$table->text('itemcondition_info')->nullable();
			$table->date('releasedate')->nullable();
			$table->string('acc_or_spare')->nullable();
			$table->text('acc_or_spare_info')->nullable();
			$table->string('additionaltype')->nullable()->default('additionalType');
			$table->text('additionaltype_info')->nullable();
			$table->string('alias')->nullable()->default('alternateName');
			$table->text('alias_info')->nullable();
			$table->string('variantof')->nullable()->default('isVariantOf');
			$table->text('variandof_info')->nullable();
			$table->text('asin_info')->nullable();
			$table->string('upc')->nullable()->index();
			$table->text('upc_info')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('itentifiers');
	}
}