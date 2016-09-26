<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:Api');*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',['namespace'=>"Venue\Http\Controllers\Api"],function ($api)
{
    $api->post('register', 'UserController@Register');

});