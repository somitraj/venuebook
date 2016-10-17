<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;
use Venue\Models\Venue;
use Venue\Models\VenueType;

class VenueController extends Controller
{
    public function GetVenueType(Request $request)
            {
                return VenueType::all()->toArray();
            }

}
