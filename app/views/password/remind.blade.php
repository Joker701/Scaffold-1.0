@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3 form-border">
        <h3 class="text-primary">Password Reset:</h3>
		{{ Form::open() }}
		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{{ Form::email('email', null, ['class' => 'form-control form-reset', 'required' => 'required', 'placeholder' => 'Email']) }}
			{{ $errors->first('email', '<span class="help-block form-margin">:message</span>') }}
		</div>
		<div class="form-group form-margin">
			{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}
			{{ link_to_route('home', 'Cancel', null, ['class' => 'btn btn-warning']) }}
		</div>
        {{ Form::close() }} 
    </div> 
</div>    
@stop