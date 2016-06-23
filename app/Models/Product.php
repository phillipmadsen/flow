<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function productOption()
	{
		return $this->hasMany('ProductOption', 'poid');
	}

	public function schema()
	{
		return $this->hasOne('SchemaType');
	}

}