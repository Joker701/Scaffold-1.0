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
