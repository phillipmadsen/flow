<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model {

	protected $table = 'product_features';
	public $timestamps = true;
	protected $fillable = array('feature_name', 'useicon', 'icon');
	protected $visible = array('feature_name', 'useicon', 'icon');

	public function productOption()
	{
		return $this->belongsTo('ProductOption', 'poid');
	}

}