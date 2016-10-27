<?php
namespace Venue;


use GuzzleHttp\Client;

/*class venuedata1
{
    public static function getVenueData()
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getvenuedata');
        $data = $response->getBody()->getContents();
        $vdata =  \GuzzleHttp\json_decode($data);
        return $vdata;

    }



}*/