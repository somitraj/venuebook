<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/30/2016bvhv
 * Time: 2:54 PM
 */
Route::group(["role"=>3,"prefix"=>"user",'middleware'=>'auth.user'],function()
{
    Route::any("dashboard",["as"=>'user.dash', "uses"=>'UserController@User']);
    /*Route::get('/searchlost',['as'=>'searchlost','uses'=>'Web\LoginController@Search']);
    Route::get('/searchfound',['as'=>'searchfound','uses'=>'Web\LoginController@Lost']);
    Route::get('/lostitem',['as'=>'lostitem','uses'=>'Web\LoginController@ReportLost']);
    Route::get('/founditem',['as'=>'founditem','uses'=>'Web\LoginController@ReportFound']);*/
});