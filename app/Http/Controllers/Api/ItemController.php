<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function GetItem(Request $request){

        return TblCountry::all();


    }
}
