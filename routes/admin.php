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
});