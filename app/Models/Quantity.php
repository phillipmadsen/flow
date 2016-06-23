<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model {

	protected $table = 'quantities';
	public $timestamps = true;
	protected $fillable = array('quantity_on_hand', 'quantity_available');
	protected $visible = array('quantity_on_hand', 'quantity_available');

	public function product()
	{
		return $this->belongsTo('ProductOption', 'poid');
	}

}