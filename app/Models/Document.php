<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {

	protected $table = 'documents';
	public $timestamps = true;
	protected $fillable = array('title', 'pathto', 'filename', 'description');
	protected $visible = array('title', 'pathto', 'filename', 'description');

	public function product()
	{
		return $this->belongsTo('ProductOption', 'poid');
	}

}