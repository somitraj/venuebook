<?php
namespace Venue;


use GuzzleHttp\Client;

class userdata
{
    public static function getDetails()
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getuserdata');
        $data = $response->getBody()->getContents();
        $udata =  \GuzzleHttp\json_decode($data);
        return $udata;
        /* return view('Layout.Manager',compact('proimage'));*/
    }



}