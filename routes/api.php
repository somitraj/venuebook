<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',['namespace'=>"Venue\Http\Controllers\Api"], function ($api) {
    $api->any('register', 'UserController@Register');
    $api->any('venue', 'VenueController@Register');
    $api->any('venue_type', 'VenueController@GetVenueType');
    $api->any('login', 'AuthController@Login');
    $api->any('feedback', 'UserController@Feedback');
    $api->get('usertype', 'AddressController@GetUserType');
    $api->get('country', 'AddressController@GetCountry');
    $api->get('zone', 'AddressController@GetZone');
    $api->get('province', 'AddressController@GetProvince');
    $api->get('district', 'AddressController@GetDistrict');
   /* $api->get('locality', 'AddressController@GetLocality');*/
    $api->get('item', 'ItemController@GetItem');

    /*$api->get('venue', 'VenueController@GetVenue');*/






});
