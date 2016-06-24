<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username')->unique()->nullable();
			$table->integer('profile_id')->unsigned()->index();
			$table->integer('location_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('profiles');
	}
}