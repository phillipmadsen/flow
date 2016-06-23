<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model {

	protected $table = 'locations';
	public $timestamps = true;
	protected $fillable = array('contact_person', 'address_1', 'address_2', 'city', 'state', 'zipcode', 'nickname', 'hours_opening_mf', 'hours_closing_mf', 'hours_opening_sat', 'hours_closing_sat', 'hours_opening_sun', 'hours_closing_sun', 'phone', 'mobile', 'public_email', 'support_email');
	protected $visible = array('contact_person', 'address_1', 'address_2', 'city', 'state', 'zipcode', 'nickname', 'hours_opening_mf', 'hours_closing_mf', 'hours_opening_sat', 'hours_closing_sat', 'hours_opening_sun', 'hours_closing_sun', 'phone', 'mobile', 'public_email', 'support_email');

	public function images()
	{
		return $this->hasManyThrough('Image')->withPivot('image_location');
	}

}