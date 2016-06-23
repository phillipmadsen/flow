{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('promo', 'Promo:') !!}
			{!! Form::text('promo') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
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
			{!! Form::label('coupon', 'Coupon:') !!}
			{!! Form::text('coupon') !!}
		</li>
		<li>
			{!! Form::label('coupon_code', 'Coupon_code:') !!}
			{!! Form::text('coupon_code') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}