<?php


Route::get('/',[
    'uses'=>'VenueController@create'
]);
Route::get('/login',[
    'as'=>'web.login',
    'uses'=>'UserController@login'
]);
Route::get('/Feedback',[
    'as'=>'web.Feedback',
    'uses'=>'FeedbackController@Feedback'


]);
?>

