<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailsTable extends Migration {

	public function up()
	{
		Schema::create('details', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_option_id')->unsigned()->index();
			$table->string('name')->unique();
			$table->string('short', 160)->nullable()->default('short description goes here');
			$table->text('description')->nullable();
			$table->string('slug')->unique();
			$table->enum('availability', array('Discontinued', 'InStock', 'InStoreOnly', 'LimitedAvailability', 'OnlineOnly', 'OutOfStock', 'PreOrder', 'PreSale', 'SoldOut'))->index();
			$table->enum('product_line', array('Qnuque', 'HandQuilting', 'MachineQuilting', 'TrueCut', 'Accessories', 'Frames', 'Hoops', 'AutomationSoftware'))->index();
			$table->enum('status', array('inDraft', 'inReview', 'withDesign', 'inProof', 'inProcess', 'isHidden', 'wasDeleted', 'Published', 'Offline', 'Removed', 'Archived'));
			$table->timestamps();
			$table->string('subtitle')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('details');
	}
}