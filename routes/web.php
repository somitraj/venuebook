<?php


Route::get('/',['as'=>'home',
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
Route::any('/Venue',[
    'as'=>'web.Venue',
    'uses'=>'VenueController@Register'
]);
Route::get('/Address',[
    'as'=>'web.Address',
    'uses'=>'UserController@Address'
]);
Route::get('/Venue_Type',[
    'as'=>'web.VenueType',
    'uses'=>'VenueController@Venue_Type'
]);
Route::any('/Feedback',[
    'as'=>'web.Feedback',
    'uses'=>'FeedbackController@Feedback'
]);
Route::get('/Contact',[
    'as'=>'web.Contact',
    'uses'=>'UserController@Contact'
    ]);

Route::any('/Book',[
    'as'=>'web.Book',
    'uses'=>'BookingController@Book'
]);
Route::any('/BookTotal',[
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

Route::get('/Lainchaur',[
    'as'=>'web.Lainchaur',
    'uses'=>'UserController@Lainchaur'
]);

Route::get('/Sasa',[
    'as'=>'web.Sasa',
    'uses'=>'UserController@Sasa'
]);

Route::get('/Shanker',[
    'as'=>'web.Shanker',
    'uses'=>'UserController@Shanker'
]);

Route::get('/Star',[
    'as'=>'web.Star',
    'uses'=>'UserController@Star'
]);

Route::get('/Athiti',[
    'as'=>'web.Athiti',
    'uses'=>'UserController@Athiti'
]);

Route::get('/Hyatt',[
    'as'=>'web.Hyatt',
    'uses'=>'UserController@Hyatt'
]);

Route::get('/Thapagaun',[
    'as'=>'web.Thapagaun',
    'uses'=>'UserController@Thapagaun'
]);

Route::get('/Durbar',[
    'as'=>'web.Durbar',
    'uses'=>'UserController@Durbar'
]);

Route::get('/Radisson',[
    'as'=>'web.Radisson',
    'uses'=>'UserController@Radisson'
]);


/*Route::any('/Admin',[
    'as'=>'web.Admin',
    'uses'=>'UserController@Admin'
]);*/

Route::get('/Venue',[
    'as'=>'web.Venue',
    'uses'=>'VenueController@Register'
    ]);

Route::any('/Item',[
    'as'=>'web.Item',
    'uses'=>'UserController@Item'
]);



/*Route::group(["role"=>3,"prefix"=>"user",'middleware'=>'auth.user'],function() {
    Route::any('/User', [
        'as' => 'web.User',
        'uses' => 'UserController@User'*/
    /*]);*/
/*});*/
require_once ("User.php");
require_once ("Manager.php");
require_once ("Admin.php");


    Route::get('/logout',['as'=>'logout',function(){Session::flush();return redirect()->route('home');}]);

?>

