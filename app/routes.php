<?php

// === front routes ==== //

// static pages
Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@single'
]);

Route::get('right', [
	'as' => 'right',
	'uses' => 'PagesController@rightSidebar'
]);

Route::get('left', [
	'as' => 'left',
	'uses' => 'PagesController@leftSidebar'
]);

// === Auth === //

// register
Route::get('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@create'
]);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

// sessions
Route::get('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);

Route::post('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@store'
]);

Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);

// password reset
Route::controller('password', 'RemindersController');
