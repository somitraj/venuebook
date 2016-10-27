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
    $api->any('gallery', 'GalleryController@Gallery');
    $api->any('venue', 'VenueController@Register');
    $api->any('venue_type', 'VenueController@GetVenueType');
    $api->any('login', 'AuthController@Login');
    $api->any('feedback', 'UserController@Feedback');
    $api->get('usertype', 'AddressController@GetUserType');
    $api->get('country', 'AddressController@GetCountry');
    $api->get('zone', 'AddressController@GetZone');
    $api->get('province', 'AddressController@GetProvince');
    $api->get('district', 'AddressController@GetDistrict');
    $api->get('item', 'ItemController@GetItem');
    $api->get('userlist', 'UserController@GetUserList');
    $api->get('managerlist', 'UserController@GetManagerList');
   // $api->get('venuelist', 'UserController@GetVenueList');
    $api->get('venuelist', 'VenueController@Register');
  //  $api->any('venuedata', 'VenueController@GetVenueData');
    $api->any('slider', 'SliderController@GetSlider');
    $api->any('getimage', 'UserController@GetProfileImage');
    $api->any('getnotice', 'NotificationController@GetNotice');
    $api->get('getimage', 'UserController@GetDetails');
    $api->any('getvenuebyuserid/{id}', 'VenueController@GetVenueData');
    $api->any('getvenuedata1/{id}', 'VenueController@GetVenueData1');
    $api->any('inventory', 'VenueController@GetInventory');

   /* $api->any('getvenuedata2/{id}', 'VenueController@GetVenueData2');*/


    /*$api->any('venuedetails', 'VenueController@VenueDetails');*/
  //  $api->get('venuelist', 'VenueController@GetVenueList');






    /*$api->get('venue', 'VenueController@GetVenue');*/






});
