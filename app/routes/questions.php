<?php
// Everything inside this are routes that require authentication
// Otherwise it goes to login screen
Route::group(array('before' => 'auth'), function(){
	Route::get('/question/{id?}', ['uses'=>'QuestionController@index']);
	Route::post('/question', ['uses'=>'QuestionController@create']);

    Route::post('/question/{id}/answer', ['uses'=>'QuestionController@doAnswer']);
});
