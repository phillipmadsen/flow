{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('contact_person', 'Contact_person:') !!}
			{!! Form::text('contact_person') !!}
		</li>
		<li>
			{!! Form::label('address_1', 'Address_1:') !!}
			{!! Form::text('address_1') !!}
		</li>
		<li>
			{!! Form::label('address_2', 'Address_2:') !!}
			{!! Form::text('address_2') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('zipcode', 'Zipcode:') !!}
			{!! Form::text('zipcode') !!}
		</li>
		<li>
			{!! Form::label('nickname', 'Nickname:') !!}
			{!! Form::text('nickname') !!}
		</li>
		<li>
			{!! Form::label('hours_opening_mf', 'Hours_opening_mf:') !!}
			{!! Form::text('hours_opening_mf') !!}
		</li>
		<li>
			{!! Form::label('hours_closing_mf', 'Hours_closing_mf:') !!}
			{!! Form::text('hours_closing_mf') !!}
		</li>
		<li>
			{!! Form::label('hours_opening_sat', 'Hours_opening_sat:') !!}
			{!! Form::text('hours_opening_sat') !!}
		</li>
		<li>
			{!! Form::label('hours_closing_sat', 'Hours_closing_sat:') !!}
			{!! Form::text('hours_closing_sat') !!}
		</li>
		<li>
			{!! Form::label('hours_opening_sun', 'Hours_opening_sun:') !!}
			{!! Form::text('hours_opening_sun') !!}
		</li>
		<li>
			{!! Form::label('hours_closing_sun', 'Hours_closing_sun:') !!}
			{!! Form::text('hours_closing_sun') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::label('mobile', 'Mobile:') !!}
			{!! Form::text('mobile') !!}
		</li>
		<li>
			{!! Form::label('public_email', 'Public_email:') !!}
			{!! Form::text('public_email') !!}
		</li>
		<li>
			{!! Form::label('support_email', 'Support_email:') !!}
			{!! Form::text('support_email') !!}
		</li>
		<li>
			{!! Form::label('dealer_id', 'Dealer_id:') !!}
			{!! Form::text('dealer_id') !!}
		</li>
		<li>
			{!! Form::label('customer_id', 'Customer_id:') !!}
			{!! Form::text('customer_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}