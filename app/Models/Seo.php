<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model {

	protected $table = 'meta_details';
	public $timestamps = true;
	protected $fillable = array('title', 'description', 'keywords', 'facebook_title', 'google_plus_title', 'twitter_title');
	protected $visible = array('title', 'description', 'keywords', 'facebook_title', 'google_plus_title', 'twitter_title');

	public function details()
	{
		return $this->belongsTo('Details', 'details_id');
	}

}