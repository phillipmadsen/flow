{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('details_id', 'Details_id:') !!}
			{!! Form::text('details_id') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('keywords', 'Keywords:') !!}
			{!! Form::textarea('keywords') !!}
		</li>
		<li>
			{!! Form::label('author_id', 'Author_id:') !!}
			{!! Form::text('author_id') !!}
		</li>
		<li>
			{!! Form::label('facebook_title', 'Facebook_title:') !!}
			{!! Form::text('facebook_title') !!}
		</li>
		<li>
			{!! Form::label('google_plus_title', 'Google_plus_title:') !!}
			{!! Form::text('google_plus_title') !!}
		</li>
		<li>
			{!! Form::label('twitter_title', 'Twitter_title:') !!}
			{!! Form::text('twitter_title') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}