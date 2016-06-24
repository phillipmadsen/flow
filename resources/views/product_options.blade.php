{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('price_id', 'Price_id:') !!}
			{!! Form::text('price_id') !!}
		</li>
		<li>
			{!! Form::label('identifier_id', 'Identifier_id:') !!}
			{!! Form::text('identifier_id') !!}
		</li>
		<li>
			{!! Form::label('details_id', 'Details_id:') !!}
			{!! Form::text('details_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}