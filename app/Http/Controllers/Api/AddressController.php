<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
use Venue\Models\TblCountry;
use Venue\Models\TblDistrict;
use Venue\Models\TblProvince;
use Venue\Models\TblZone;

class AddressController extends Controller
{
   public function GetCountry(Request $request){
       return TblCountry::all();
   }
    public function GetProvince(Request $request){
        return TblProvince::all();
    }
    public function GetDistrict(Request $request){
        return TblDistrict::all();
    }
    public function GetZone(Request $request){
        return TblZone::all();
    }

}
