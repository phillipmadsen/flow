<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = true;
	protected $fillable = array('title', 'slug', 'meta_description', 'description');
	protected $visible = array('title', 'slug', 'meta_description', 'description');

}