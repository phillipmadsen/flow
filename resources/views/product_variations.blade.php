{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('attribute_name', 'Attribute_name:') !!}
			{!! Form::text('attribute_name') !!}
		</li>
		<li>
			{!! Form::label('product_attribute_value', 'Product_attribute_value:') !!}
			{!! Form::textarea('product_attribute_value') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}