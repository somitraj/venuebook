<?php


Route::get('/',[
    'uses'=>'VenueController@create'
]);
Route::any('/login',[
    'as'=>'web.login',
    'uses'=>'UserController@login'
]);

Route::any('/Register',[
    'as'=>'web.Register',
    'uses'=>'UserController@Register'
]);
Route::get('/Address',[
    'as'=>'web.Address',
    'uses'=>'UserController@Address'
]);
Route::any('/Feedback',[
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
/*Route::get('/Manager',[
    'as'=>'web.Manager',
    'uses'=>'UserController@Manager'
]);*/

Route::get('/Terms',[
    'as'=>'web.Terms',
    'uses'=>'UserController@Terms'
]);
Route::get('/Privacy',[
    'as'=>'web.Privacy',
    'uses'=>'UserController@Privacy'
]);

/*Route::any('/Admin',[
    'as'=>'web.Admin',
    'uses'=>'UserController@Admin'
]);*/

Route::get('/Venue',[
    'as'=>'web.Venue',
    'uses'=>'VenueController@Manager'
    ]);
Route::any('/Item',[
    'as'=>'web.Item',
    'uses'=>'UserController@Item'
]);
Route::any('/User',[
    'as'=>'web.User',
    'uses'=>'UserController@User'
]);

require_once ("Manager.php");
require_once ("Admin.php");

?>


Auth::routes();

Route::get('/home', 'HomeController@index');
