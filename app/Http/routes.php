<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/desafio','WelcomeController@desafio');

Route::post('peoples','PeoplesController@store');

Route::get('/resultado/{key}','PeoplesController@result');

Route::group(array('before' => 'auth'), function()
{
	Route::resource('admin','PeoplesController');

	Route::get('peoples/show/{hash}','PeoplesController@show');
});
