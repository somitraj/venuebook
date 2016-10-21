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
    Route::any("client",["as"=>'admin.client', "uses"=>'UserController@UserList']);
    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@ManagerList']);
    /*    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@VenueList']);*/
    Route::any("notification",["as"=>'admin.notice', "uses"=>'NotificationController@GetNotice']);
    //Route::any("venue",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
});