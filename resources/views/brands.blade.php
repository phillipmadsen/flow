{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('brand', 'Brand:') !!}
			{!! Form::text('brand') !!}
		</li>
		<li>
			{!! Form::label('info', 'Info:') !!}
			{!! Form::textarea('info') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}