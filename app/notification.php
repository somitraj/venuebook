<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/25/2016
 * Time: 11:48 AM
 */

namespace Venue;


use GuzzleHttp\Client;

class notification
{
    public static function getNotification()
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getnotice');
        $data = $response->getBody()->getContents();
        $notices =  \GuzzleHttp\json_decode($data);
        return $notices;
    }


}