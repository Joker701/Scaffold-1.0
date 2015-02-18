<?php

use UserMailer;

class RegistrationController extends \BaseController {

	function __construct(UserMailer $mailer)
	{
		$this->beforeFilter('guest');
		$this->beforeFilter('csrf', array('on' => 'post'));
		$this->mailer = $mailer;
	}

	public function create()
	{
		return View::make('registration.create');
	}

	public function store()
	{
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput()->with('warning', 'The following errors occurred.');
		}

		$user = User::create([
				'username' => Input::get('username'),
				'email' => Input::get('email'),
				'password' => Hash::make(Input::get('password')),
			]);

		Auth::login($user);

		$this->mailer->sendWecomeMessageTo($user);

		return Redirect::home()->with('success', 'Welcome aboard!');

	}

}
