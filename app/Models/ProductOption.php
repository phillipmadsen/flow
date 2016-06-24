<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model {

	protected $table = 'product_options';
	public $timestamps = true;
	protected $guarded = array('id');

	public function price()
	{
		return $this->hasOne('Price', 'price_id');
	}

	public function details()
	{
		return $this->hasOne('Details', 'd_id');
	}

	public function manufacturer()
	{
		return $this->hasOne('Manufacturer', 'm_id');
	}

	public function identity()
	{
		return $this->hasOne('Ids', 'identifier_id');
	}

	public function catagory()
	{
		return $this->hasOne('Category', 'category_id');
	}

	public function variations()
	{
		return $this->hasManyThrough('ProductVariation')->withPivot('product_option_product_variation');
	}

	public function product()
	{
		return $this->belongsTo('Product', 'pid');
	}

	public function features()
	{
		return $this->hasManyThrough('ProductFeature')->withPivot('product_feature_product_option');
	}

	public function brands()
	{
		return $this->hasMany('Brand');
	}

	public function videos()
	{
		return $this->hasMany('Video');
	}

	public function docs()
	{
		return $this->hasMany('Document');
	}

	public function quantity()
	{
		return $this->hasOne('Quantity');
	}

	public function datalayers()
	{
		return $this->hasManyThrough('DataLayer')->withPivot('datalayer_product_option');
	}

	public function tracking()
	{
		return $this->hasManyThrough('Tracking')->withPivot('product_option_tracking');
	}

	public function images()
	{
		return $this->hasManyThrough('Image')->withPivot('image_product_option');
	}

}