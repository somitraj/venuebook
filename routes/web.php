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
Route::any('/Gallery',[
    'as'=>'web.Gallery',
    'uses'=>'GalleryController@Gallery'
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

Route::any('/MenuSelect',[
    'as'=>'web.MenuSelect',
    'uses'=>'BookingController@MenuSelect'
]);

Route::any('/Search',[
    'as'=>'web.Search',
    'uses'=>'UserController@Search'

]);

Route::any('/venuesearch',[
    'as'=>'venue.Search',
    'uses'=>'UserController@Search'

]);

Route::any("/notice",["as"=>'web.notice', "uses"=>'NotificationController@GetNotice']);


Route::get('/Terms',[
    'as'=>'web.Terms',
    'uses'=>'UserController@Terms'
]);
Route::get('/Privacy',[
    'as'=>'web.Privacy',
    'uses'=>'UserController@Privacy'
]);

Route::any('/venuepage',[
    'as'=>'web.venuepage',
    'uses'=>'UserController@VenuePage'
]);

Route::get('/Venue',[
    'as'=>'web.Venue',
    'uses'=>'VenueController@Register'
    ]);

Route::any('/Item',[
    'as'=>'web.Item',
    'uses'=>'UserController@Item'
]);
Route::any('/MasterSlider',[
    'as'=>'web.Slider',
    'uses'=>'VenueController@MasterSlider'
]);
Route::any('/venuesearch',[
    'as'=>'web.search',
    'uses'=>'UserController@Search'
]);

Route::get('/BookPreview',[
    'as'=>'web.BookPreview',
    'uses'=>'BookingController@BookPreview'
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

