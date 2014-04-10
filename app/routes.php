<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$data['pagetitle'] = 'WELCOME';
	return View::make('index', $data);
});

Route::get('contact-us','BasicController@contact');
Route::get('gallery','BasicController@gallery');
Route::get('news','BasicController@news');