<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;

class UserController extends Controller
{
    public function Register(Request $request){

       /*return $request->all();*/
        User::create($request->all());




    }
}
