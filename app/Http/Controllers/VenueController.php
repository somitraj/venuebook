<?php

namespace Venue\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Venue\User;

/*use Venue\Http\Requests;*/
use Kris\LaravelFormBuilder\FormBuilder;

class VenueController extends Controller
{
    public function Manager(FormBuilder $formBuilder, Request $request)
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);



        $response = $client->request('GET','country');
        $data = $response->getBody()->getContents();
        $country =  \GuzzleHttp\json_decode($data);

        $response1 = $client->request('GET','province');
        $data1 = $response1->getBody()->getContents();
        $province =  \GuzzleHttp\json_decode($data1);

        $response2 = $client->request('GET','zone');
        $data2 = $response2->getBody()->getContents();
        $zone =  \GuzzleHttp\json_decode($data2);

        $response3 = $client->request('GET','district');
        $data3 = $response3->getBody()->getContents();
        $district =  \GuzzleHttp\json_decode($data3);





        if($request->getMethod()=='POST') {
                /*print_r($request->get('username')); die();*/
            try {
                $pathToFile='logo/';
                /*return $pathToFile;*/
                $image='null';
                $uploadfile = $pathToFile . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    $image='uploads/'.basename($_FILES['image']['name']);
                }
                 $response = $client->request('POST', 'venue', [
                    'form_params' => [
                        /*'first_name' =>  $request->get('first_name'),
                        'last_name' =>  $request->get('last_name'),*/
                        'username' => $request->get('username'),
                        'name'=>$request->get('vname'),
                        'phone_no' =>  $request->get('phone_no'),
                        'phone_no_2' =>  $request->get('phone_no_2'),
                        'established_date' =>  $request->get('established_date'),
                        'space_area' =>  $request->get('space_area'),
                        'email' => $request->get('email'),
                        'password' => $request->get('password'),
                        'user_type_id' => $request->get('user_type'),
                        'nationality_id' =>  $request->get('nationality_id'),
                        'person_capacity' =>  $request->get('person_capacity'),
                        'country_id' => $request->get('Country'),
                        'province_id' => $request->get('Province'),
                        'zone_id' => $request->get('Zones'),
                        'district_id' => $request->get('District'),
                        'locality' => $request->get('Locality'),

                        'image' => $image,


                    ]
                ]);
                /*  print_r($response->getBody()->getContents());
                  die();*/
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }
        }





        $form = $formBuilder->Create('Venue\Forms\VenueForm',['method'=>'POST','url' => route('web.Venue')],['country'=>$country,'province'=>$province,'zone'=>$zone,'district'=>$district]);


        /*$form = $formBuilder->Create('Venue\Forms\VenueForm',['method'=>'POST','url' => route('web.Venue')]);*/

        return view('Layout.Venue',compact('form'));

    }
    public function create(){
        return view('Layout.Home');

    }
}