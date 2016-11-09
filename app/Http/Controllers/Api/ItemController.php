<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
use Venue\Models\TblItemType;

class ItemController extends Controller
{
    public function GetItem(Request $request){

        return TblCountry::all();


    }
    public function GetItemType(){
        return TblItemType::all();
    }
}
