<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model {

	protected $table = 'dealers';
	public $timestamps = true;
	protected $fillable = array('dealer');
	protected $visible = array('dealer');

	public function stores()
	{
		return $this->hasMany('Locations', 'location_id');
	}

	public function employees()
	{
		return $this->belongsToMany('Profile', 'user_id');
	}

}