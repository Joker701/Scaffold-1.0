<?php

class SessionsController extends \BaseController {

	function __construct()
	{
		$this->beforeFilter('guest', ['except' => 'destroy']);
		$this->beforeFilter('csrf', array('on' => 'post'));
	}


	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'password');

		$validator = Validator::make($input, User::$login_rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput()->with('warning', 'The following errors occurred.');
		}

		if(Auth::attempt($input))
		{
			return Redirect::intended('/')->with('success', 'Welcome back.');
		}

		if(!Auth::attempt($input))
		{
			return Redirect::back()->withInput()->with('warning', 'Invalid credentials, please try again.');
		}
		
	}

	public function destroy()
	{
		Auth::logout();

		return Redirect::home()->with('success', 'You logged out.');
	}

}