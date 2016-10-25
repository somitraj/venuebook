<?php

namespace Venue\Http\Controllers\api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
use Venue\Models\Gallery;
use Venue\Models\Venue;

class SliderController extends Controller
{
    public function GetSlider(Request $request){
        return Gallery::all()->toArray();
        /*return $gallery;*/
    }


    }
