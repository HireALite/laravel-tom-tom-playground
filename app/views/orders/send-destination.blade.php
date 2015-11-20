@extends("layout")

@section("html")
	{{ Form::open() }}

	@include("parts.vehicle-select")

	@include("parts.simple-text", ['name' => 'orderid'])

	<div>
		Ordertext: {{ Form::textarea('ordertext', Input::old('ordertext')) }}
	</div>

	<div>
		Ordertype: {{ Form::select('ordertype', [1 => 'service', 2 => 'pickup', 3 => 'delivery'], Input::old('ordertype')) }}
	</div>

	<div>
		Orderdate: {{ Form::text('orderdate', Input::old('orderdate', TomTom::formatDate($date))) }}
	</div>

	<div>
		Ordertime: {{ Form::text('ordertime', Input::old('ordertime', TomTom::formatTime($date))) }}
	</div>

	<div>
		Arrivaltolerance: {{ Form::select('arrivaltolerance', [0 => 0, 15 => 15, 30 => 30, 60 => 60, 120 => 120], Input::old('arrivaltolerance', 15)) }}
	</div>

	<div>
		Notify_enabled: {{ Form::select('notify_enabled', [1 => 'yes', 0 => 'no'], Input::old('notify_enabled')) }}
	</div>

	<div>
		Notify_leadtime: {{ Form::text('notify_leadtime', Input::old('notify_leadtime')) }}
	</div>

	@include("parts.simple-text", ['name' => 'contact'])
	@include("parts.simple-text", ['name' => 'contacttel'])
	@include("parts.simple-text", ['name' => 'latitude'])
	@include("parts.simple-text", ['name' => 'longitude'])
	@include("parts.simple-text", ['name' => 'country'])
	@include("parts.simple-text", ['name' => 'zip'])
	@include("parts.simple-text", ['name' => 'city'])
	@include("parts.simple-text", ['name' => 'street'])
	@include("parts.simple-text", ['name' => 'useorderstates'])
	@include("parts.simple-text", ['name' => 'orderautomations'])

	<div>
		Wp (waypoints): {{ Form::textarea('wp', Input::old('wp')) }}
	</div>

	@include("parts.simple-text", ['name' => 'mapcode'])


	{{ Form::submit() }}

	{{ Form::close() }}
@stop