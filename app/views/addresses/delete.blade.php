@extends("layout")

@section("html")
	{{ Form::open() }}

	@include("parts.simple-text", ['name' => 'addrnr'])
	@include("parts.simple-text", ['name' => 'addruid'])

	{{ Form::submit() }}

	{{ Form::close() }}
@stop