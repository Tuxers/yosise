<?php
// Everything inside this are routes that require authentication
// Otherwise it goes to login screen
Route::group(array('before' => 'auth'), function(){

});
