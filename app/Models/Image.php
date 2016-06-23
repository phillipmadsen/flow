<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $table = 'images';
	public $timestamps = true;
	protected $fillable = array('original_name', 'filename', 'catalog_path', 'grid_path', 'prod_thumb_path', 'header_image_path', 'postimage_path', 'gravatar_path', 'full_path', 'icon_path');
	protected $visible = array('original_name', 'filename', 'catalog_path', 'grid_path', 'prod_thumb_path', 'header_image_path', 'postimage_path', 'gravatar_path', 'full_path', 'icon_path');

	public function profile()
	{
		return $this->belongsTo('Profile')->withPivot('image_profile');
	}

	public function product()
	{
		return $this->belongsToMany('ProductOption')->withPivot('image_product_option');
	}

	public function locations()
	{
		return $this->belongsTo('Locations')->withPivot('image_location');
	}

}