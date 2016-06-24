<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
	protected $table = 'media';
	protected $fillable = ['name','path','description','ext','gallery_id','status'];
	protected $guarded = ['id'];
}
