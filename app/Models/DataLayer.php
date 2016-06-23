<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataLayer extends Model {

	protected $table = 'datalayer';
	public $timestamps = true;
	protected $fillable = array('datalayer_reference', 'value');
	protected $visible = array('datalayer_reference', 'value');

	public function datalayer()
	{
		return $this->belongsToMany('ProductOption')->withPivot('datalayer_product_option');
	}

}