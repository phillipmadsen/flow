<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model {

	protected $table = 'product_features';
	public $timestamps = true;
	protected $fillable = array('useicon', 'icon', 'feature_name');
	protected $visible = array('useicon', 'icon', 'feature_name');

	public function productOption()
	{
		return $this->belongsTo('ProductOption', 'poid');
	}

}