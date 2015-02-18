@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3 form-border">
        <h3 class="text-primary">Reset Password:</h3>  
		{{ Form::open() }}
			{{ Form::hidden('token', $token) }}
		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{{ Form::email('email', null, ['class' => 'form-control form-reset', 'required' => 'required', 'placeholder' => 'Email']) }}
			{{ $errors->first('email', '<span class="help-block form-margin">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			{{ Form::password('password', ['class' => 'form-control form-reset', 'required' => 'required', 'placeholder' => 'Password']) }}
			{{ $errors->first('password', '<span class="help-block form-margin">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
			{{ Form::password('password_confirmation', ['class' => 'form-control form-reset', 'required' => 'required', 'placeholder' => 'Password Confirmation']) }}
			{{ $errors->first('password_confirmation', '<span class="help-block form-margin">:message</span>') }}
		</div>
		<div class="form-group form-margin">
			{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}
			{{ link_to_route('home', 'Cancel', null, ['class' => 'btn btn-warning']) }}
		</div>
        {{ Form::close() }} 
    </div> 
</div>    
@stop