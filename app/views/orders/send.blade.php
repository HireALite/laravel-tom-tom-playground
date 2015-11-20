@extends("layout")

@section("html")
	{{ Form::open() }}

		@include("parts.vehicle-select")

		<div>
			Orderid: {{ Form::text('orderid', Input::old('orderid')) }}
		</div>

		<div>
			Ordertext: {{ Form::textarea('ordertext', Input::old('ordertext')) }}
		</div>

		{{ Form::submit() }}

	{{ Form::close() }}
@stop