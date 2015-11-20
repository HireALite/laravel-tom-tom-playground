@extends("layout")

@section("html")
	{{ Form::open() }}

	@include("parts.simple-text", ['name' => 'addrnr'])
	@include("parts.simple-text", ['name' => 'addrname1'])
	@include("parts.simple-text", ['name' => 'addrname2'])
	@include("parts.simple-text", ['name' => 'addrname3'])
	@include("parts.simple-text", ['name' => 'addrstreet'])
	@include("parts.simple-text", ['name' => 'addrzip'])
	@include("parts.simple-text", ['name' => 'addrcity'])
	@include("parts.simple-text", ['name' => 'addrcountry', 'default' => 'GB'])
	@include("parts.simple-text", ['name' => 'addrregion'])
	@include("parts.simple-text", ['name' => 'contact'])
	@include("parts.simple-text", ['name' => 'teloffice'])
	@include("parts.simple-text", ['name' => 'telmobile'])
	@include("parts.simple-text", ['name' => 'telprivate'])
	@include("parts.simple-text", ['name' => 'fax'])
	@include("parts.simple-text", ['name' => 'mailaddr'])
	@include("parts.simple-text", ['name' => 'radius', 'default' => 250])

	<div>
		Addressinfo: {{ Form::textarea('addrinfo', Input::old('addrinfo')) }}
	</div>

	<div>
		Location: {{ Form::textarea('location', Input::old('location')) }}
	</div>

	@include("parts.simple-text", ['name' => 'positionx'])
	@include("parts.simple-text", ['name' => 'positiony'])

	<div>
		Visible: {{ Form::checkbox('visible', Input::old('visible', true)) }}
	</div>

	@include("parts.simple-text", ['name' => 'addrgrpname'])
	@include("parts.simple-text", ['name' => 'addrgrpuid'])

	@include("parts.simple-text", ['name' => 'mapcode'])

	{{ Form::submit() }}

	{{ Form::close() }}
@stop