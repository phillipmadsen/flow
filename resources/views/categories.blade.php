{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug') !!}
		</li>
		<li>
			{!! Form::label('meta_description', 'Meta_description:') !!}
			{!! Form::text('meta_description') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}