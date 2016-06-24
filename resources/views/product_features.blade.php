{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('feature_name', 'Feature_name:') !!}
			{!! Form::text('feature_name') !!}
		</li>
		<li>
			{!! Form::label('useicon', 'Useicon:') !!}
			{!! Form::text('useicon') !!}
		</li>
		<li>
			{!! Form::label('icon', 'Icon:') !!}
			{!! Form::text('icon') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}