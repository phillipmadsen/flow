<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('poid')->references('id')->on('product_option')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_features', function(Blueprint $table) {
			$table->foreign('poid')->references('id')->on('product_option')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_features', function(Blueprint $table) {
			$table->foreign('pfid')->references('id')->on('product_features')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_features', function(Blueprint $table) {
			$table->foreign('pvid')->references('id')->on('product_variations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_variations', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
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
			$table->foreign('po_id')->references('id')->on('product_option')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('dealer_id')->references('id')->on('dealers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('itentifiers', function(Blueprint $table) {
			$table->foreign('po_id')->references('id')->on('product_option')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->foreign('price_id')->references('id')->on('prices')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->foreign('identifier_id')->references('id')->on('itentifiers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->foreign('mid')->references('id')->on('manufacturers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->foreign('did')->references('id')->on('details')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('details', function(Blueprint $table) {
			$table->foreign('poid')->references('id')->on('product_option')
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
			$table->foreign('poid')->references('id')->on('product_option')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('videos', function(Blueprint $table) {
			$table->foreign('poid')->references('id')->on('product_option')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('documents', function(Blueprint $table) {
			$table->foreign('poid')->references('id')->on('product_option')
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
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_poid_foreign');
		});
		Schema::table('product_features', function(Blueprint $table) {
			$table->dropForeign('product_features_poid_foreign');
		});
		Schema::table('product_features', function(Blueprint $table) {
			$table->dropForeign('product_features_pfid_foreign');
		});
		Schema::table('product_features', function(Blueprint $table) {
			$table->dropForeign('product_features_pvid_foreign');
		});
		Schema::table('product_variations', function(Blueprint $table) {
			$table->dropForeign('product_variations_product_id_foreign');
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
			$table->dropForeign('prices_po_id_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_dealer_id_foreign');
		});
		Schema::table('itentifiers', function(Blueprint $table) {
			$table->dropForeign('itentifiers_po_id_foreign');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->dropForeign('product_option_product_id_foreign');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->dropForeign('product_option_category_id_foreign');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->dropForeign('product_option_price_id_foreign');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->dropForeign('product_option_identifier_id_foreign');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->dropForeign('product_option_mid_foreign');
		});
		Schema::table('product_option', function(Blueprint $table) {
			$table->dropForeign('product_option_did_foreign');
		});
		Schema::table('details', function(Blueprint $table) {
			$table->dropForeign('details_poid_foreign');
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
			$table->dropForeign('quantities_poid_foreign');
		});
		Schema::table('videos', function(Blueprint $table) {
			$table->dropForeign('videos_poid_foreign');
		});
		Schema::table('documents', function(Blueprint $table) {
			$table->dropForeign('documents_poid_foreign');
		});
		Schema::table('meta_details', function(Blueprint $table) {
			$table->dropForeign('meta_details_details_id_foreign');
		});
		Schema::table('meta_details', function(Blueprint $table) {
			$table->dropForeign('meta_details_author_id_foreign');
		});
	}
}