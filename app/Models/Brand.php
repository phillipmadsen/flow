<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	protected $table = 'brands';
	public $timestamps = true;
	protected $fillable = array('brand', 'info');
	protected $visible = array('brand', 'info');

	public function product()
	{
		return $this->belongsTo('ProductOption');
	}

}