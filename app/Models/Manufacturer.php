<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model {

	protected $table = 'manufacturers';
	public $timestamps = true;
	protected $fillable = array('name');
	protected $visible = array('name');

	public function location()
	{
		return $this->hasOne('Locations');
	}

}