<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'profiles';
	public $timestamps = true;
	protected $fillable = array('username', 'profile_id', 'location_id');
	protected $visible = array('username', 'profile_id', 'location_id');

	public function location()
	{
		return $this->hasMany('Locations', 'location_id');
	}

	public function images()
	{
		return $this->hasManyThrough('Image')->withPivot('image_profile');
	}

}