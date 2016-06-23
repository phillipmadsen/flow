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
  
     public function seoble()
    {
        return $this->morphTo();
    }

    public function updateFromInput()
    {
      $this->title    = e(Input::get('title'));
      $this->description  = e(Input::get('description'));
      $this->keywords   = e(Input::get('keywords'));
      $this->facebook_title   = e(Input::get('facebook_title'));
      $this->google_plus_title   = e(Input::get('google_plus_title'));
      $this->twitter_title   = e(Input::get('twitter_title'));
      $this->save();
      return true;
    }

}
