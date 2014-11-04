<?php
// Everything inside this are routes that require authentication
// Otherwise it goes to login screen

Route::get('register', ['uses'=>'UserController@register']);
Route::post('register', ['uses'=>'UserController@doRegister']);
Route::group(array('before' => 'auth'), function(){
    Route::get('profile/{id?}', ['uses'=>'UserController@profile']);
});
