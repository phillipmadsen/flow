<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyMedia extends Model
{
	protected $table = 'media';
	protected $fillable = ['name','path','description','ext','gallery_id','status'];
	protected $guarded = ['id'];
}
