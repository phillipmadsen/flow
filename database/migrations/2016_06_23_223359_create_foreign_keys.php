<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('product_features', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_variations', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prices', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('dealer_id')->references('id')->on('dealers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('itentifiers', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->foreign('price_id')->references('id')->on('prices')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->foreign('identifier_id')->references('id')->on('itentifiers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->foreign('details_id')->references('id')->on('details')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('details', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('brands', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dealers', function(Blueprint $table) {
			$table->foreign('pid')->references('id')->on('products')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dealers', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dealers', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('quantities', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('videos', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('documents', function(Blueprint $table) {
			$table->foreign('product_option_id')->references('id')->on('product_options')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('meta_details', function(Blueprint $table) {
			$table->foreign('details_id')->references('id')->on('details')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('meta_details', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('product_features', function(Blueprint $table) {
			$table->dropForeign('product_features_product_option_id_foreign');
		});
		Schema::table('product_variations', function(Blueprint $table) {
			$table->dropForeign('product_variations_product_option_id_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_product_id_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_user_id_foreign');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_profile_id_foreign');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_location_id_foreign');
		});
		Schema::table('prices', function(Blueprint $table) {
			$table->dropForeign('prices_product_option_id_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_dealer_id_foreign');
		});
		Schema::table('itentifiers', function(Blueprint $table) {
			$table->dropForeign('itentifiers_product_option_id_foreign');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->dropForeign('product_options_product_id_foreign');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->dropForeign('product_options_price_id_foreign');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->dropForeign('product_options_identifier_id_foreign');
		});
		Schema::table('product_options', function(Blueprint $table) {
			$table->dropForeign('product_options_details_id_foreign');
		});
		Schema::table('details', function(Blueprint $table) {
			$table->dropForeign('details_product_option_id_foreign');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_product_option_id_foreign');
		});
		Schema::table('brands', function(Blueprint $table) {
			$table->dropForeign('brands_product_option_id_foreign');
		});
		Schema::table('dealers', function(Blueprint $table) {
			$table->dropForeign('dealers_pid_foreign');
		});
		Schema::table('dealers', function(Blueprint $table) {
			$table->dropForeign('dealers_user_id_foreign');
		});
		Schema::table('dealers', function(Blueprint $table) {
			$table->dropForeign('dealers_location_id_foreign');
		});
		Schema::table('quantities', function(Blueprint $table) {
			$table->dropForeign('quantities_product_option_id_foreign');
		});
		Schema::table('videos', function(Blueprint $table) {
			$table->dropForeign('videos_product_option_id_foreign');
		});
		Schema::table('documents', function(Blueprint $table) {
			$table->dropForeign('documents_product_option_id_foreign');
		});
		Schema::table('meta_details', function(Blueprint $table) {
			$table->dropForeign('meta_details_details_id_foreign');
		});
		Schema::table('meta_details', function(Blueprint $table) {
			$table->dropForeign('meta_details_author_id_foreign');
		});
	}
}