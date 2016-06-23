{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('category_id', 'Category_id:') !!}
			{!! Form::text('category_id') !!}
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
			{!! Form::label('mid', 'Mid:') !!}
			{!! Form::text('mid') !!}
		</li>
		<li>
			{!! Form::label('did', 'Did:') !!}
			{!! Form::text('did') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}