{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sale', 'Sale:') !!}
			{!! Form::text('sale') !!}
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
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}