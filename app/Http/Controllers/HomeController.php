<?php

namespace Venue\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','slider');
        $data = $response->getBody()->getContents();
        $sliders =  \GuzzleHttp\json_decode($data);
        print_r($sliders);die();
        return view('home',compact('sliders'));

    }
}
