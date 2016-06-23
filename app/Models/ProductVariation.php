<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model {

	protected $table = 'product_variations';
	public $timestamps = true;
	protected $fillable = array('attribute_name', 'product_attribute_value');
	protected $visible = array('attribute_name', 'product_attribute_value');

}