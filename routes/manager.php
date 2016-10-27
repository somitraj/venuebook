<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016
 * Time: 2:54 PM
 */
Route::group(["role"=>2,"prefix"=>"manager"],function()
{
    Route::any("dashboard",["as"=>'manager.dash', "uses"=>'UserController@Manager']);
    Route::any("feedback",["as"=>'manager.feedback', "uses"=>'FeedbackController@Feedback']);
    Route::any("gallery",["as"=>'manager.gallery', "uses"=>'GalleryController@Gallery']);
    Route::any("inventory",["as"=>'manager.inventory', "uses"=>'InventoryController@Inventory']);
    Route::any("account",["as"=>'manager.account', "uses"=>'UserController@ManagerVenuePage']);

});