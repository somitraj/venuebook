<?php
Route::group(["role"=>"1","prefix"=>"admin"],function()
{
    Route::any("dashboard",["as"=>'admin.dashboard',
                                "uses"=>'UserController@Admin']);
});


?>