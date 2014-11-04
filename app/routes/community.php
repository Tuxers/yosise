<?php

Route::group(array('before' => 'auth'), function(){
    Route::get('community/{id}', ['uses'=>'CommunityController@index']);
    Route::get('community/{id}/questions', ['uses'=>'CommunityController@questions']);
    Route::get('community/{id}/members', ['uses'=>'CommunityController@members']);
    Route::post('community/{id}/follow', ['uses'=>'CommunityController@follow']);
    Route::post('community/{id}/unfollow', ['uses'=>'CommunityController@unfollow']);
});

