<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model {

	protected $table = 'promos';
	public $timestamps = true;
	protected $fillable = array('promo', 'price', 'to', 'from', 'coupon', 'coupon_code');
	protected $visible = array('promo', 'price', 'to', 'from', 'coupon', 'coupon_code');

}