{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('onsale', 'Onsale:') !!}
			{!! Form::text('onsale') !!}
		</li>
		<li>
			{!! Form::label('is_promo', 'Is_promo:') !!}
			{!! Form::text('is_promo') !!}
		</li>
		<li>
			{!! Form::label('dealer_price', 'Dealer_price:') !!}
			{!! Form::text('dealer_price') !!}
		</li>
		<li>
			{!! Form::label('beginning_price', 'Beginning_price:') !!}
			{!! Form::text('beginning_price') !!}
		</li>
		<li>
			{!! Form::label('base_price', 'Base_price:') !!}
			{!! Form::text('base_price') !!}
		</li>
		<li>
			{!! Form::label('map_price', 'Map_price:') !!}
			{!! Form::text('map_price') !!}
		</li>
		<li>
			{!! Form::label('to', 'To:') !!}
			{!! Form::text('to') !!}
		</li>
		<li>
			{!! Form::label('from', 'From:') !!}
			{!! Form::text('from') !!}
		</li>
		<li>
			{!! Form::label('shop_price', 'Shop_price:') !!}
			{!! Form::text('shop_price') !!}
		</li>
		<li>
			{!! Form::label('msrp', 'Msrp:') !!}
			{!! Form::text('msrp') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}