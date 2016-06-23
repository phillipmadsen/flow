<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetaDetailsTable extends Migration {

	public function up()
	{
		Schema::create('meta_details', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 60)->nullable();
			$table->integer('details_id')->unsigned()->index();
			$table->text('description')->nullable();
			$table->text('keywords')->nullable();
			$table->integer('author_id')->unsigned()->index()->default('1');
			$table->string('facebook_title', 70)->nullable()->default('add facebook title');
			$table->string('google_plus_title', 70)->nullable()->default('add title for google plus');
			$table->string('twitter_title', 70)->nullable()->default('add title for twitter post');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('meta_details');
	}
}