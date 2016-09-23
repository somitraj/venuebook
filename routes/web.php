<?php


Route::get('/',[
    'uses'=>'VenueController@create'
]);
Route::any('/login',[
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
Route::get('/BookTotal',[
    'as'=>'web.BookTotal',
    'uses'=>'BookingController@BookTotal'
]);
Route::get('/Manager',[
    'as'=>'web.Manager',
    'uses'=>'UserController@Manager'
]);

Route::get('/Terms',[
    'as'=>'web.Terms',
    'uses'=>'UserController@Terms'
]);
Route::get('/Privacy',[
    'as'=>'web.Privacy',
    'uses'=>'UserController@Privacy'
]);

Route::any('/Admin',[
    'as'=>'web.Admin',
    'uses'=>'UserController@Admin'
]);
?>

