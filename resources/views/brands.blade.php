{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
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