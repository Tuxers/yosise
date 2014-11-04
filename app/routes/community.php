<?php

Route::group(array('before' => 'auth'), function(){
    Route::get('community/{id}', ['uses'=>'CommunityController@index']);
    Route::get('community/{id}/questions', ['uses'=>'CommunityController@questions']);
    Route::post('community/{id}/follow', ['uses'=>'CommunityController@follow']);
});

