{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('short', 'Short:') !!}
			{!! Form::text('short') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug') !!}
		</li>
		<li>
			{!! Form::label('availability', 'Availability:') !!}
			{!! Form::text('availability') !!}
		</li>
		<li>
			{!! Form::label('product_line', 'Product_line:') !!}
			{!! Form::text('product_line') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('subtitle', 'Subtitle:') !!}
			{!! Form::text('subtitle') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}