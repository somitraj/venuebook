<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016
 * Time: 2:54 PM
 */
Route::group(["role"=>1,'middleware'=>'auth.user',"prefix"=>"admin"],function()
{
    Route::any("dashboard",["as"=>'admin.dash', "uses"=>'UserController@Admin']);
    Route::any("client",["as"=>'admin.client', "uses"=>'UserController@GetIndex']);
    Route::any("venue",["as"=>'admin.venue', "uses"=>'UserController@GetManagerList']);


});