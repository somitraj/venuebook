<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;

class VenueController extends Controller

{
    public function create(Request $request){
        return venues::create($request->all());
    }
    public function update(Request $request){
        return venues::update($request->all());
    }
    public function delete(Request $request){
        return venues::delete($request->all());
    }
    public function maintain_venue_info(Request $request){
        return venues::maintain_venue_info($request->all());
    }
    public function select(Request $request){
        return venues::select($request->all());
    }
    public function list(Request $request){
        return venues::list($request->all());
    }




}
