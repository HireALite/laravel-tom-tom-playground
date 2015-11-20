<div>
	{{ ucwords($name) }}: {{ Form::text($name, Input::old($name, isset($default) ? $default: null)) }}
</div>