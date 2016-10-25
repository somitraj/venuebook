<?php

namespace Venue\Http\Controllers\api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
use Venue\Models\Feedback;

class NotificationController extends Controller
{
    public function GetNotice(Request $request){
        return Feedback::all()->toArray();
    }
}
