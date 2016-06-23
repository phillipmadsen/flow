<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ids extends Model {

	protected $table = 'itentifiers';
	public $timestamps = true;
	protected $guarded = array('id');
	protected $fillable = array('model', 'model_info', 'sku', 'sku_info', 'asin', 'mpn', 'mpn_info', 'gtin13', 'gtin13_info', 'relatedto', 'itemcondition', 'itemcondition_info', 'releasedate', 'acc_or_spare', 'acc_or_spare_info', 'additionaltype', 'additionaltype_info', 'alias', 'alias_info', 'variantof', 'variandof_info', 'asin_info', 'upc', 'upc_info');
	protected $visible = array('model', 'model_info', 'sku', 'sku_info', 'asin', 'mpn', 'mpn_info', 'gtin13', 'gtin13_info', 'relatedto', 'itemcondition', 'itemcondition_info', 'releasedate', 'acc_or_spare', 'acc_or_spare_info', 'additionaltype', 'additionaltype_info', 'alias', 'alias_info', 'variantof', 'variandof_info', 'asin_info', 'upc', 'upc_info');

}