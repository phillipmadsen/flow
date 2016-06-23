<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model {

	protected $table = 'tracking';
	public $timestamps = true;
	protected $fillable = array('name', 'value');
	protected $visible = array('name', 'value');

	public function productOptions()
	{
		return $this->belongsToMany('ProductOption')->withPivot('product_option_tracking');
	}

}