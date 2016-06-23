{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('pid', 'Pid:') !!}
			{!! Form::text('pid') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('dealer', 'Dealer:') !!}
			{!! Form::text('dealer') !!}
		</li>
		<li>
			{!! Form::label('location_id', 'Location_id:') !!}
			{!! Form::text('location_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}