<?php
namespace Venue;


use GuzzleHttp\Client;

class GetImage
{
    public static function getImage()
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getimage');
        $data = $response->getBody()->getContents();
        $proimage =  \GuzzleHttp\json_decode($data);
        return $proimage;
       /* return view('Layout.Manager',compact('proimage'));*/
    }



}