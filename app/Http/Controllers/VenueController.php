<?php

namespace Venue\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Venue\User;
use Venue\Models\Venue;
use Venue\Models\VenueType;


/*use Venue\Http\Requests;*/
use Kris\LaravelFormBuilder\FormBuilder;

class VenueController extends Controller
{
    /**
     * @param FormBuilder $formBuilder
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Register(FormBuilder $formBuilder, Request $request)
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

        $response4 = $client->request('GET','venue_type');
        $data4 = $response4->getBody()->getContents();
        $venue_type =  \GuzzleHttp\json_decode($data4);

        if($request->getMethod()=='POST') {  //activates venue register button


            try {
                $pathToFile1='uploads/';
                $profile_image='null';
                $pathToFile='logo/';
                /*return $pathToFile;*/
                $image='null';
                $uploadfile = $pathToFile . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    $image='logo/'.basename($_FILES['image']['name']);   //eti samma upload vako photo euta folder ma save garna lai
                }
                $uploadfile1 = $pathToFile1 . basename($_FILES['profile_image']['name']);
                if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadfile1)) {
                    $profile_image='uploads/'.basename($_FILES['profile_image']['name']);
                }
                 $response = $client->request('POST', 'venue', [
                    'form_params' => [
                       'first_name' =>  $request->get('first_name'),
                        'last_name' =>  $request->get('last_name'),
                        'username' => $request->get('username'),
                        'name'=>$request->get('name'),
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
                        'venue_type_id' => $request->get('venue_type'),
                        'profile_image' => $profile_image,
                        'image' => $image,


                    ]
                ]);

            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }
            $request->session()->flash('alert-success', 'Registration Successful!!');
        }





        $form = $formBuilder->Create('Venue\Forms\VenueForm',['method'=>'POST','url' => route('web.Venue')],['country'=>$country,'province'=>$province,'zone'=>$zone,'district'=>$district,'venue_type'=>$venue_type]);


        return view('Layout.Venue',compact('form'))/*->with('success','Registration Successful')*/;

    }
    public function Venue_Type(FormBuilder $formBuilder)
    {

        $form = $formBuilder->Create('Venue\Forms\VenueTypeForm', ['method' => 'POST', 'url' => route('web.VenueType')]);
        return view('Layout.Venue_Type', compact('form'));
    }
    public function create(){
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','slider');
        $data = $response->getBody()->getContents();
        $sliders =  \GuzzleHttp\json_decode($data);

        return view('Layout.Home',compact('sliders'));

    }

   /* public function MasterSlider(Request $request){

        $id= $request->id;

        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getvenuedata',[
            'form_params' => [
                'venue_id' => $request->id
            ]
        ]);
        $data = $response->getBody()->getContents();
        $vdata =  \GuzzleHttp\json_decode($data);


        return view('Layout.MasterSLider',compact('vdata'));

    }*/



    /*public function VenueList(){*/


   /* public function VenueData()
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        $response = $client->request('GET','venuedata');
        $data = $response->getBody()->getContents();
        $venuedata =  \GuzzleHttp\json_decode($data);*/
        /*print_r($venuedata);die();*/
       /* return view('home',compact('venuedata'));*/
 /*   }*/
    public function VenueList(){
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        $response = $client->request('GET','venuelist');
        $data = $response->getBody()->getContents();
        $venuelist =  \GuzzleHttp\json_decode($data);
        return view('Layout.Managerlist',compact('venuelist'));
    }
    public function VenueManagerDetails($id){
        $client = new Client(['base_uri' => config('app.REST_API')]);

        $response = $client->request('POST', 'venuedetails/' . $id);
        // print_r($response);die();
        $data = $response->getBody()->getContents();
        // print_r($data);die();
        $venuedetails = \GuzzleHttp\json_decode($data);
        //print_r($userdetails);die();
        return view('Layout.VenueManagerDetails',compact('venuedetails'));
    }
    public function EditVenueDetails(FormBuilder $formBuilder,$id)
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('POST', 'editvenuedetails/' . $id);
        $data = $response->getBody()->getContents();
        $editvenuedetails = \GuzzleHttp\json_decode($data);
       // print_r($editvenuedetails->$id);die();

        $form = $formBuilder->Create(\Venue\Forms\VenueDetailsForm::class, ['method' => 'POST', 'url' => 'admin/editvenuedetails'],
            [
                //'id' => $editvenuedetails->id,
                'first_name' => $editvenuedetails->first_name,
                'last_name' => $editvenuedetails->last_name,
                'username' => $editvenuedetails->username,
                'dob' => $editvenuedetails->dob,
                'nationality_id' => $editvenuedetails->nationality_id,
                'phone_no' => $editvenuedetails->phone_no,
                'phone_no_2' => $editvenuedetails->phone_no_2,
                'established_date' => $editvenuedetails->established_date,
                'space_area' => $editvenuedetails->space_area,
                'email' => $editvenuedetails->email,
               // 'password' => $venuedetails->password,
               // 'user_type_id' => $venuedetails->user_type,
               // 'country_id' => $editvenuedetails->Country,
                //'province_id' => $editvenuedetails->Province,
                //'zone_id' => $editvenuedetails->Zones,
                //'district_id' => $editvenuedetails->District,
                //'locality' => $venuedetails->Locality,
               // 'venue_type_id' => $venuedetails->venue_type_id,
               // 'profile_image' => $venuedetails->profile_image,
                //'image' => $venuedetails->image
            ]);


        return view('Layout.Editvenue', compact('form'));
    }
}

