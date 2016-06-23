<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchemaType extends Model {

	protected $table = 'schrma_type';
	public $timestamps = true;
	protected $fillable = array('type');
	protected $visible = array('type');

}