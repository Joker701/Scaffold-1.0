@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3 form-border">
        <h3 class="text-primary">Log In:</h3>
		{{ Form::open(['route' => 'login_path']) }}
		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email']) }}
			{{ $errors->first('email', '<span class="help-block form-margin">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			{{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password']) }}
			{{ $errors->first('password', '<span class="help-block form-margin">:message</span>') }}
		</div>
		<div class="form-group form-margin">
			{{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
			{{ link_to_route('home', 'Cancel', null, ['class' => 'btn btn-warning']) }}
			<a class="btn btn-default pull-right" href="password/remind">Reset Password</a>
		</div>
        {{ Form::close() }} 
    </div> 
</div>    
@stop