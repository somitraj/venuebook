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
    Route::any("clientlist",["as"=>'admin.clientlist', "uses"=>'UserController@Register']);
    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@ManagerList']);
    /*    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@VenueList']);*/
    Route::any("notice",["as"=>'admin.notice', "uses"=>'NotificationController@GetNotice']);
    //Route::any("venue",["as"=>'admin.venuelist', "uses"=>'VenueController@VenueList']);
    Route::any("managerlist",["as"=>'admin.managerlist', "uses"=>'VenueController@Register']);
    Route::any("venuelist",["as"=>'admin.venuelist', "uses"=>'VenueController@Register']);



});