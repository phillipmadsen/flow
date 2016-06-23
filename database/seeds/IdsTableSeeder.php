<?php

use Illuminate\Database\Seeder;
use App\Models\Ids;

class IdsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('itentifiers')->delete();

		// SidentifierSeeder
		Ids::create(array(
				'model_info' => 'The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin',
				'sku_info' => 'The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.',
				'mpn_info' => 'The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.',
				'gtin13_info' => 'The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. ',
				'itemcondition_info' => '(itemCondition) NewCondition, RefurbishedCondition, UsedCondition, DamagedCondition',
				'acc_or_spare_info' => '(isAccessoryOrSparePartFor ) A pointer to another product (or multiple products) for which this product is an accessory or spare part.',
				'additionaltype_info' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa s',
				'alias_info' => '(alternateName) An alias for the item.',
				'variandof_info' => '(isVariantOf) > (ProductModel) A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.',
				'asin_info' => 'Amazon Standard Identification Numbers (ASINs) are unique blocks of 10 letters and/or numbers that identify items. You can find the ASIN on the items product information page at Amazon.com.',
				'upc_info' => 'Universal Product Code (UPC) is a 12-digit bar code used extensively for retail packaging in United States.'
			));
	}
}