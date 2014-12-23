<?php

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('/track', 'TrackerController@index');
