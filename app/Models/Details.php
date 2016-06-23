<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details extends Model {

	protected $table = 'details';
	public $timestamps = true;
	protected $fillable = array('name', 'short', 'description', 'slug', 'availability', 'product_line', 'status', 'subtitle');
	protected $visible = array('name', 'short', 'description', 'slug', 'availability', 'product_line', 'status', 'subtitle');

	public function productOption()
	{
		return $this->belongsTo('ProductOption', 'poid');
	}

	public function meta()
	{
		return $this->hasOne('Seo');
	}

}