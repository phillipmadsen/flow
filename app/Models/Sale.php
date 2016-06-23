<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {

	protected $table = 'sales';
	public $timestamps = true;
	protected $fillable = array('sale', 'price', 'to', 'from');
	protected $visible = array('sale', 'price', 'to', 'from');

}