<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016
 * Time: 2:54 PM
 */
Route::group(["role"=>1,"prefix"=>"admin"],function()
{
    Route::any("dashboard",["as"=>'admin.dash', "uses"=>'UserController@Admin']);
    Route::any("client",["as"=>'admin.client', "uses"=>'UserController@UserList']);
    Route::any("userdetails/{id}",["as"=>'admin.userdetails', "uses"=>'UserController@ViewUserDetails']);

    Route::any("useredit/{id}",["as"=>'admin.useredit', "uses"=>'UserController@EditUserDetails']);

    //Route::any("userdetails",["as"=>'admin.userdetails', "uses"=>'UserController@ViewUserDetails']);

    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@ManagerList']);
    /*    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@VenueList']);*/
    Route::any("notice",["as"=>'admin.notice', "uses"=>'NotificationController@GetNotice']);
    //Route::any("venue",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
    Route::any("venuedetails/{id}",["as"=>'admin.venuedetails', "uses"=>'VenueController@VenueManagerDetails']);
    Route::any("editvenuedetails/{id}",["as"=>'admin.managerdetails', "uses"=>'VenueController@EditVenueDetails']);

    //Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
    Route::any("venueregister",["as"=>'admin.venueregister', "uses"=>'VenueController@Register']);
    Route::any('account',['as'=>'admin.account','uses'=>'UserController@UserAccount'  ]);

});