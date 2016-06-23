<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model {

	protected $table = 'prices';
	public $timestamps = true;
	protected $fillable = array('onsale', 'is_promo', 'dealer_price', 'beginning_price', 'base_price', 'map_price', 'to', 'from', 'shop_price', 'msrp');
	protected $visible = array('onsale', 'is_promo', 'dealer_price', 'beginning_price', 'base_price', 'map_price', 'to', 'from', 'shop_price', 'msrp');

	public function sales()
	{
		return $this->hasMany('Sale');
	}

	public function promos()
	{
		return $this->hasMany('Promo');
	}

}