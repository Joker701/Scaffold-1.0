<?php

class UserMailer extends Mailer {

	public function sendWecomeMessageTo(User $user)
	{
		$subject = 'Welcome to Site-Name';
		$view = 'emails.registration.confirm';

		return $this->sendTo($user, $subject, $view);
	}

}