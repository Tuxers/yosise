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

foreach(glob(app_path().'/routes/*.php') as $filename) {
    include($filename);
}

Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('/login', ['uses'=>'AuthController@login']);
Route::post('/login', ['uses'=>'AuthController@doLogin']);
Route::post('/logout', ['uses'=>'AuthController@doLogout']);
