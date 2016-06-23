<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	protected $table = 'videos';
	public $timestamps = true;
	protected $fillable = array('title', 'url', 'description');
	protected $visible = array('title', 'url', 'description');

	public function product()
	{
		return $this->belongsTo('ProductOption', 'poid');
	}

}