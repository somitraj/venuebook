<?php
Route::group(["role"=>"2","prefix"=>"manager"],function()
{
    Route::any("dashboard",["as"=>'manager.dash',
                                "uses"=>'UserController@Admin']);
});


?>