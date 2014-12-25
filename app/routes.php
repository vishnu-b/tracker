<?php

Route::get('tracker/', function()
{
	return View::make('pages.home');
});

Route::get('tracker/track', 'TrackerController@index');

Route::resource('tracker/user', 'UserController');

Route::post('tracker/trackdata', 'TrackerController@store');
