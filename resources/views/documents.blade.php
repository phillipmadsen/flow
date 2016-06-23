{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('poid', 'Poid:') !!}
			{!! Form::text('poid') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('pathto', 'Pathto:') !!}
			{!! Form::text('pathto') !!}
		</li>
		<li>
			{!! Form::label('filename', 'Filename:') !!}
			{!! Form::text('filename') !!}
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