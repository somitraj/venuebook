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

    //Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
    Route::any("venueregister",["as"=>'admin.venueregister', "uses"=>'VenueController@Register']);
    Route::any('account',['as'=>'admin.account','uses'=>'UserController@UserAccount'  ]);
    Route::any("password",["as"=>'admin.password', "uses"=>'UserController@ChangePassword']);
    Route::any("settings",["as"=>'admin.settings', "uses"=>'UserController@Settings']);
    Route::any("notice",["as"=>'admin.notice', "uses"=>'NotificationController@GetNotice']);
    Route::any("deleteuserdetails/{id}",["as"=>'admin.deleteuserdetails', "uses"=>'UserController@UserDelete']);

    Route::any("userdeactive",["as"=>'admin.deactiveuser', "uses"=>'UserController@Deactiveuser']);
    Route::any("useractive/{id}",["as"=>'admin.activeuser', "uses"=>'UserController@Activeuser']);

    Route::any("venue",["as"=>'admin.venue', "uses"=>'VenueController@ManagerList']);
    Route::any("venuedetails/{id}",["as"=>'admin.venuedetails', "uses"=>'VenueController@VenueManagerDetails']);
    Route::any("editvenuedetails/{id}",["as"=>'admin.managerdetails', "uses"=>'VenueController@EditVenueDetails']);
    Route::any("deletevenuedetails/{id}",["as"=>'admin.deletevenuedetails', "uses"=>'VenueController@VenueDelete']);
    Route::any("venuedeactive",["as"=>'admin.deactivevenue', "uses"=>'VenueController@Deactivevenue']);
    Route::any("venueactive/{id}",["as"=>'admin.activevenue', "uses"=>'VenueController@Activevenue']);


    Route::any("notice",["as"=>'admin.notice', "uses"=>'NotificationController@GetNotice']);



    /*    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@VenueList']);*/
    //Route::any("venue",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);



    //Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
    Route::any("venueregister",["as"=>'admin.venueregister', "uses"=>'VenueController@Register']);
    Route::any('account',['as'=>'admin.account','uses'=>'UserController@UserAccount'  ]);
    Route::any("password",["as"=>'admin.password', "uses"=>'UserController@ChangePassword']);
    Route::any("settings",["as"=>'admin.settings', "uses"=>'UserController@Settings']);

});