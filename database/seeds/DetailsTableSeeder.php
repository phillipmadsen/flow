<?php

use Illuminate\Database\Seeder;
use App\Models\Details;

class DetailsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('details')->delete();

		// z44
		Details::create(array(
				'product_option_id' => 1,
				'name' => 'Z44 Quilting Frame',
				'short' => 'The Z44 No-Baste Hand Quilting Frame',
				'description' => 'The Z44 is our top of the line hand quilting frame, as well as the most adjustable frame on the market. You can set the included height-adjustable legs to your level without the need of any tools! The work area also tilts to six different angles, letting you work in comfort. The Z44 is also durable and designed to withstand heavy use. Made with a beautifully crafted Baltic Birch wood, this is yet another way Grace quilting frames combine style and functionality.',
				'slug' => 'z44',
				'availability' => 'instock',
				'product_line' => 'hand quilting'
			));
	}
}