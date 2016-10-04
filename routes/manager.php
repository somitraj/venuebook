<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016
 * Time: 2:54 PM
 */
Route::group(["role"=>2,"prefix"=>"manager",'middleware'=>'auth.user'],function()
{
    Route::any("dashboard",["as"=>'manager.dash', "uses"=>'UserController@Manager']);
});