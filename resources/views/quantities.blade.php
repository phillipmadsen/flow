{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('poid', 'Poid:') !!}
			{!! Form::text('poid') !!}
		</li>
		<li>
			{!! Form::label('quantity_on_hand', 'Quantity_on_hand:') !!}
			{!! Form::text('quantity_on_hand') !!}
		</li>
		<li>
			{!! Form::label('quantity_available', 'Quantity_available:') !!}
			{!! Form::text('quantity_available') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}