<?php


Route::get('/',[
    'uses'=>'VenueController@create'
]);
Route::get('/login',[
    'as'=>'web.login',
    'uses'=>'UserController@login'
]);
Route::get('/Register',[
    'as'=>'web.Register',
    'uses'=>'UserController@Register'
]);
Route::get('/Address',[
    'as'=>'web.Address',
    'uses'=>'UserController@Address'
]);
Route::get('/Feedback',[
    'as'=>'web.Feedback',
    'uses'=>'FeedbackController@Feedback'
]);
Route::get('/Contact',[
    'as'=>'web.Contact',
    'uses'=>'UserController@Contact'
    ]);

Route::get('/Book',[
    'as'=>'web.Book',
    'uses'=>'BookingController@Book'
]);


?>

