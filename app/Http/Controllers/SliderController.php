<?php

namespace Venue\Http\Controllers;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Models\Gallery;

class SliderController extends Controller
{
    public function GetSlider(){
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','slider');
        $data = $response->getBody()->getContents();
        $slider =  \GuzzleHttp\json_decode($data);
        return view('Home',compact('slider'));
    }
}
