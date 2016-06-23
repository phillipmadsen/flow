{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('useicon', 'Useicon:') !!}
			{!! Form::text('useicon') !!}
		</li>
		<li>
			{!! Form::label('icon', 'Icon:') !!}
			{!! Form::text('icon') !!}
		</li>
		<li>
			{!! Form::label('poid', 'Poid:') !!}
			{!! Form::text('poid') !!}
		</li>
		<li>
			{!! Form::label('pfid', 'Pfid:') !!}
			{!! Form::text('pfid') !!}
		</li>
		<li>
			{!! Form::label('pvid', 'Pvid:') !!}
			{!! Form::text('pvid') !!}
		</li>
		<li>
			{!! Form::label('feature_name', 'Feature_name:') !!}
			{!! Form::text('feature_name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}