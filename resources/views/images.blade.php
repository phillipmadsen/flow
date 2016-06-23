{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('original_name', 'Original_name:') !!}
			{!! Form::textarea('original_name') !!}
		</li>
		<li>
			{!! Form::label('filename', 'Filename:') !!}
			{!! Form::textarea('filename') !!}
		</li>
		<li>
			{!! Form::label('catalog_path', 'Catalog_path:') !!}
			{!! Form::textarea('catalog_path') !!}
		</li>
		<li>
			{!! Form::label('grid_path', 'Grid_path:') !!}
			{!! Form::textarea('grid_path') !!}
		</li>
		<li>
			{!! Form::label('prod_thumb_path', 'Prod_thumb_path:') !!}
			{!! Form::textarea('prod_thumb_path') !!}
		</li>
		<li>
			{!! Form::label('header_image_path', 'Header_image_path:') !!}
			{!! Form::textarea('header_image_path') !!}
		</li>
		<li>
			{!! Form::label('postimage_path', 'Postimage_path:') !!}
			{!! Form::textarea('postimage_path') !!}
		</li>
		<li>
			{!! Form::label('gravatar_path', 'Gravatar_path:') !!}
			{!! Form::textarea('gravatar_path') !!}
		</li>
		<li>
			{!! Form::label('full_path', 'Full_path:') !!}
			{!! Form::textarea('full_path') !!}
		</li>
		<li>
			{!! Form::label('icon_path', 'Icon_path:') !!}
			{!! Form::textarea('icon_path') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}