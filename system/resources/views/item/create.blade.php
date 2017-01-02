@extends('app')

@section('content')

{!! Html::script('js/selfcreate.js', array('type' => 'text/javascript')) !!}
{!! Html::script('js/angular.min.js', array('type' => 'text/javascript')) !!}
{!! Html::script('js/item.kits.js', array('type' => 'text/javascript')) !!}
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{trans('item.new_item')}}</div>

				<div class="panel-body">
					@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif
					{!! Html::ul($errors->all()) !!}

					{!! Form::open(array('url' => 'items', 'files' => true)) !!}

					<div class="form-group">
					{!! Form::label('upc_ean_isbn', trans('item.upc_ean_isbn')) !!}
					{!! Form::text('upc_ean_isbn', Input::old('upc_ean_isbn'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('item_name', trans('item.item_name').' *') !!}
					{!! Form::text('item_name', Input::old('item_name'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('size', trans('item.size')) !!}
					{!! Form::text('size', Input::old('size'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('description', trans('item.description')) !!}
					{!! Form::textarea('description', Input::old('description'), array('class' => 'form-control','placeholder' => '', 'maxlength' => 250)) !!}
					</div>

					<div class="form-group">
					{!! Form::label('avatar', trans('item.choose_avatar')) !!}
					{!! Form::file('avatar', Input::old('avatar'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('cost_price', trans('item.cost_price').' *') !!}
					<!-- {!! Form::text('cost_price', Input::old('cost_price'), array('class' => 'form-control')) !!} -->
						<div class="input-group">
	                        <div class="input-group-addon">$</div>
	                        <input type="text" class="form-control" name="cost_price" id="cost_price" onkeypress="return isNumberKey(event,id)" value="{{ old('cost_price') }}"/>
	                    </div>
					</div>

					<div class="form-group">
					{!! Form::label('selling_price', trans('item.selling_price').' *') !!}
					<!-- {!! Form::text('selling_price', Input::old('selling_price'), array('class' => 'form-control')) !!} -->
						<div class="input-group">
	                        <div class="input-group-addon">$</div>
	                        <input type="text" class="form-control" name="selling_price" id="selling_price" onkeypress="return isNumberKey(event,id)" value="{{ old('selling_price') }}"/>
	                    </div>
					</div>

					<div class="form-group">
					{!! Form::label('quantity', trans('item.quantity')) !!}
					<!-- {!! Form::text('quantity', Input::old('quantity'), array('class' => 'form-control')) !!} -->
					{!! Form::selectRange('quantity', 1, 10000, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit(trans('item.submit'), array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection