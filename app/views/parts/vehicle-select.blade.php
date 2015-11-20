<div>
	Vehicle: {{ Form::select('objectuid', $vehicles_array, Input::old('objectuid', Session::get('objectuid'))) }}
</div>