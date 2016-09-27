<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
use Venue\Models\TblCountry;
use Venue\Models\TblProvince;
use Venue\Models\TblZone;
use Venue\Models\TblDistrict;


class AddressController extends Controller
{
    public function GetCountry(Request $request){

       return TblCountry::all();

    }
    public function GetProvince(Request $request){
        return TblProvince::all();
    }
    public function GetZone(Request $request){
        return TblZone::all();
    }
    public function GetDistrict(Request $request){
        return TblDistrict::all();
    }
    /*public function GetLocality(Request $request){
        return TblLocality::all();
    }*/
}
