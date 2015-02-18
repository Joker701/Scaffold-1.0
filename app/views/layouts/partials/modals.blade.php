	@include('layouts.partials.modals')

<!-- sign in -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
      </div>
      <div class="modal-body">
		{{ Form::open(['route' => 'sessions.store', 'id' => 'form-1']) }}
			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				{{Form::email('email', null, ['placeholder' => 'Email','class' => 'form-control', 'required' => 'required'])}}
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			</div>
			<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
				{{Form::password('password', ['placeholder' => 'Password','class' => 'form-control', 'required' => 'required'])}}
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			</div>
		</div>
		<div class="modal-footer">
			<div class="form-group">
				{{ Form::submit('Submit', ['class' => 'btn btn-success btn-sm']) }}
				<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
			</div>
			{{ Form::close() }}
			<p class="pull-right"><a href="/forgot_password">Forgot Password?</a></p> 
      	</div> 
      </div>
  </div>
</div>

<!-- new account -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
		{{ Form::open(['url' => 'register', 'id' => 'form-2']) }}
		<?php $countries = ['' => 'Select'] + Address::lists('country', 'id');?>
		<div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
			{{ Form::select('country_id', $countries, 'Select', ['class' => 'form-control', 'required' => 'required']) }}
			{{ $errors->first('country_id', '<span class="help-block">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
			{{Form::text('firstname', null, ['placeholder' => 'First Name','class' => 'form-control', 'required' => 'required'])}}
			{{ $errors->first('firstname', '<span class="help-block">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
			{{Form::text('lastname', null, ['placeholder' => 'Last Name','class' => 'form-control', 'required' => 'required'])}}
			{{ $errors->first('lastname', '<span class="help-block">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{{Form::email('email', null, ['placeholder' => 'Email','class' => 'form-control', 'required' => 'required'])}}
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
			{{Form::text('telephone', null, ['placeholder' => 'Phone format: 123-123-1234','class' => 'form-control', 'required' => 'required'])}}
			{{ $errors->first('telephone', '<span class="help-block">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			{{Form::password('password', ['placeholder' => 'Password','class' => 'form-control', 'required' => 'required'])}}
			{{ $errors->first('password', '<span class="help-block">:message</span>') }}
		</div>
		<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
			{{Form::password('password_confirmation', ['placeholder' => 'Password Confirmation','class' => 'form-control', 'required' => 'required'])}}
			{{ $errors->first('password_confirmation', '<span class="help-block">:message</span>') }}
		</div>
		</div>
		<div class="modal-footer">
		{{ Form::hidden('admin', 2) }}
		<div class="form-group">	        
			{{ Form::submit('Submit', ['class' => 'btn btn-success btn-sm']) }}
			<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
		</div>
		{{ Form::close() }}
		<p class="pull-right">
			<a href="/login" data-dismiss="modal" data-toggle="modal" data-target="#signinModal">
				Already have an account? Sign in
			</a>
		</p>  
      	</div>
      </div>
  </div>
</div>

<!-- contact -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
			{{ Form:: open(['url' => 'contact_request', 'id' => 'form-1']) }}
				<!-- Name field -->
				<div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
					{{ Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'required' => 'required'])}}
					{{ $errors->first('name', '<span class="help-block">:message</span>') }}
				</div>
				<!-- Email field -->
				<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
					{{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])}}
					{{ $errors->first('email', '<span class="help-block">:message</span>') }}
				</div>
				<!-- Phone field -->
				<div class="form-group {{ ($errors->has('phone')) ? 'has-error' : '' }}">
					{{ Form::text('phone', null, ['placeholder' => '123-123-1234', 'class' => 'form-control', 'required' => 'required'])}}
					{{ $errors->first('phone', '<span class="help-block">:message</span>') }}
				</div>
				<!-- Comments field -->
				<div class="form-group {{ ($errors->has('comments')) ? 'has-error' : '' }}">
					{{ Form:: textarea('comments', '', ['rows' => '4', 'class' => 'form-control', 'placeholder' => 'Comments', 'required' => 'required'])}}
					{{ $errors->first('comments', '<span class="help-block">:message</span>') }}
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-group">							
					{{ Form::submit('Submit', ['class' => 'btn btn-success btn-sm']) }}
					<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
				</div>					
				{{ Form:: close() }}
			</div>  
      </div>
  </div>
</div>

<!-- store search -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Search Products</h4>
      </div>
      <div class="modal-body">
		{{ Form::open(['url' => 'store/search', 'method' => 'get']) }}
		  <div class="form-group">
		    {{ Form::text('keyword', null, ['placeholder' => 'Search Products by Name and Description', 'class' => 'form-control', 'required' => 'required']) }}
		  </div>
      </div>
		<div class="modal-footer">
		<div class="form-group">
			{{ Form::submit('Search', ['class' => 'btn btn-success btn-sm']) }}							
			<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
		</div>					
		{{ Form:: close() }}
		</div>  
      </div>
  </div>
</div>

<!-- blog search -->
<div class="modal fade" id="blogSearchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Search Blog</h4>
      </div>
      <div class="modal-body">
		{{ Form::open(['route' => 'search-post.index', 'method' => 'get']) }}
		  <div class="form-group">
		    {{ Form::text('keyword', null, ['placeholder' => 'Search Blog by Title and Contents', 'class' => 'form-control', 'required' => 'required']) }}
		  </div>
      </div>
		<div class="modal-footer">
		<div class="form-group">
			{{ Form::submit('Search', ['class' => 'btn btn-success btn-sm']) }}							
			<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
		</div>					
		{{ Form:: close() }}
		</div>  
      </div>
  </div>
</div>