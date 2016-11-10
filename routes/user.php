<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016bvhv
 * Time: 2:54 PM
 */
Route::group(["role"=>3,"prefix"=>"user",'middleware'=>'auth.user'],function()
{//yesko vitra normal user le kun kun route jana milxa define garne
    Route::any("home",["as"=>'web.User', "uses"=>'UserController@User']);
    Route::any("feedback",["as"=>'user.feedback', "uses"=>'FeedbackController@Feedback']);
    Route::any('venuepage',['as'=>'user.venuepage','uses'=>'UserController@VenuePage' ]);
    Route::any('venuesearch',['as'=>'user.search','uses'=>'UserController@Search'  ]);
    Route::any('account',['as'=>'user.account','uses'=>'UserController@UserAccount'  ]);
    Route::any('password',['as'=>'user.password', 'uses'=>'UserController@ChangePassword']);
    Route::any("settings",['as'=>'user.settings', "uses"=>'UserController@Settings']);
    Route::any('Book',['as'=>'user.Book','uses'=>'BookingController@Book']);
    Route::any('BookTotal',['as'=>'user.BookTotal','uses'=>'BookingController@BookTotal']);
    Route::any('MenuSelect',['as'=>'user.MenuSelect','uses'=>'BookingController@MenuSelect']);
    Route::any("useredit/{id}",["as"=>'user.useredit', "uses"=>'UserController@EditUserDetails']);
    Route::get('BookPreview',['as'=>'user.BookPreview','uses'=>'BookingController@BookPreview' ]);
    Route::any('MenuSelect',['as'=>'user.MenuSelect', 'uses'=>'BookingController@MenuSelect' ]);

});