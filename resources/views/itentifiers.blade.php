{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('product_option_id', 'Product_option_id:') !!}
			{!! Form::text('product_option_id') !!}
		</li>
		<li>
			{!! Form::label('model', 'Model:') !!}
			{!! Form::text('model') !!}
		</li>
		<li>
			{!! Form::label('model_info', 'Model_info:') !!}
			{!! Form::textarea('model_info') !!}
		</li>
		<li>
			{!! Form::label('sku', 'Sku:') !!}
			{!! Form::text('sku') !!}
		</li>
		<li>
			{!! Form::label('sku_info', 'Sku_info:') !!}
			{!! Form::textarea('sku_info') !!}
		</li>
		<li>
			{!! Form::label('asin', 'Asin:') !!}
			{!! Form::text('asin') !!}
		</li>
		<li>
			{!! Form::label('mpn', 'Mpn:') !!}
			{!! Form::text('mpn') !!}
		</li>
		<li>
			{!! Form::label('mpn_info', 'Mpn_info:') !!}
			{!! Form::textarea('mpn_info') !!}
		</li>
		<li>
			{!! Form::label('gtin13', 'Gtin13:') !!}
			{!! Form::text('gtin13') !!}
		</li>
		<li>
			{!! Form::label('gtin13_info', 'Gtin13_info:') !!}
			{!! Form::textarea('gtin13_info') !!}
		</li>
		<li>
			{!! Form::label('relatedto', 'Relatedto:') !!}
			{!! Form::text('relatedto') !!}
		</li>
		<li>
			{!! Form::label('itemcondition', 'Itemcondition:') !!}
			{!! Form::text('itemcondition') !!}
		</li>
		<li>
			{!! Form::label('itemcondition_info', 'Itemcondition_info:') !!}
			{!! Form::textarea('itemcondition_info') !!}
		</li>
		<li>
			{!! Form::label('releasedate', 'Releasedate:') !!}
			{!! Form::text('releasedate') !!}
		</li>
		<li>
			{!! Form::label('acc_or_spare', 'Acc_or_spare:') !!}
			{!! Form::text('acc_or_spare') !!}
		</li>
		<li>
			{!! Form::label('acc_or_spare_info', 'Acc_or_spare_info:') !!}
			{!! Form::textarea('acc_or_spare_info') !!}
		</li>
		<li>
			{!! Form::label('additionaltype', 'Additionaltype:') !!}
			{!! Form::text('additionaltype') !!}
		</li>
		<li>
			{!! Form::label('additionaltype_info', 'Additionaltype_info:') !!}
			{!! Form::textarea('additionaltype_info') !!}
		</li>
		<li>
			{!! Form::label('alias', 'Alias:') !!}
			{!! Form::text('alias') !!}
		</li>
		<li>
			{!! Form::label('alias_info', 'Alias_info:') !!}
			{!! Form::textarea('alias_info') !!}
		</li>
		<li>
			{!! Form::label('variantof', 'Variantof:') !!}
			{!! Form::text('variantof') !!}
		</li>
		<li>
			{!! Form::label('variandof_info', 'Variandof_info:') !!}
			{!! Form::textarea('variandof_info') !!}
		</li>
		<li>
			{!! Form::label('asin_info', 'Asin_info:') !!}
			{!! Form::textarea('asin_info') !!}
		</li>
		<li>
			{!! Form::label('upc', 'Upc:') !!}
			{!! Form::text('upc') !!}
		</li>
		<li>
			{!! Form::label('upc_info', 'Upc_info:') !!}
			{!! Form::textarea('upc_info') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}