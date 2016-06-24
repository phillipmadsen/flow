<?php

use Illuminate\Database\Seeder;
use App\Models\Seo;

class SeoTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('meta_details')->delete();

		// metaz44
		Seo::create(array(
				'title' => 'z44',
				'details_id' => 1,
				'description' => 'The Z44 is our top of the line hand quilting frame, as well as the most adjustable frame on the market. You can set the included height-adjustable legs to your level without the need of any tools! The work area also tilts to six different angles, letting you work in comfort. The Z44 is also durable and designed to withstand heavy use. Made with a beautifully crafted Baltic Birch wood, this is yet another way Grace quilting frames combine style and functionality.',
				'keywords' => 'z44, hand quilting frame',
				'author_id' => 1,
				'facebook_title' => ' Z44 top of the line frame',
				'google_plus_title' => ' Z44 top of the line frame',
				'twitter_title' => ' Z44 top of the line frame'
			));
	}
}