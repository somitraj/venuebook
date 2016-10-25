<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016
 * Time: 2:54 PM
 */
Route::group(["role"=>1,'middleware'=>'auth.user',"prefix"=>"admin"],function()
{ //yesko vitra admin le kun kun route jana milxa define garne
    Route::any("dashboard",["as"=>'admin.dash', "uses"=>'UserController@Admin']);
    Route::any("clientregister",["as"=>'admin.clientregister', "uses"=>'UserController@Register']);
    Route::any("client",["as"=>'admin.client', "uses"=>'UserController@UserList']);
    Route::any("venue",["as"=>'admin.managerlist', "uses"=>'UserController@ManagerList']);
    Route::any("managerlist",["as"=>'admin.managerlist', "uses"=>'UserController@ManagerList']);
    Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'VenueController@Register']);
   // Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'UserController@VenueList']);
    // Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'VenueController@Venue_Type']);
    Route::any("notification",["as"=>'admin.notice', "uses"=>'NotificationController@GetNotice']);
    //Route::any("venue",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
});