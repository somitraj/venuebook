<?php

namespace Venue\Http\Controllers\api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function Book1(Request $request){
        try{
            $date=$request->get('booking_date');
            $time=$request->get('booking_time');
            $venue_id=$request->get('venue_id');
            $event=$request->get('event');
            return $venue_id;
        }
        catch(\Exception $e)
        {
            print_r($e->getMessage());die();
        }
    }
}
