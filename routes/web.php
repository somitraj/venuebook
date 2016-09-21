<?php


Route::get('/',[
    'uses'=>'VenueController@create'
]);
Route::get('/login',[
    'as'=>'web.login',
    'uses'=>'UserController@login'
]);

?>

