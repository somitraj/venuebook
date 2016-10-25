<?php

namespace Venue\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
use Venue\Models\Feedback;

class NotificationController extends Controller
{
    public function GetNotice(){
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getnotice');
        $data = $response->getBody()->getContents();
        $notices =  \GuzzleHttp\json_decode($data);
       /* print_r($notices);die();*/
        return view('Layout.Notification',compact('notices'));
    }
}
