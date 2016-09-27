<?php

namespace Venue\Http\Controllers;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;

class VenueController extends Controller
{
    public function create(FormBuilder $formBuilder)
    {
        /* $form=$formBuilder->create(\Venue\Forms\user::class);
         return view('VenueMaster', ['form'=>$form]);*/
        /* return view('Layout.Home');*/
        /* return view('Layout.Home');*/
        $venues = new Venue(['base_uri' => 'http://localhost:8005/api/']);
        $venues->setAttribute("name", request->get('name'));
        $venues->setAttribute("image", request->get('image'));
        $venues->setAttribute("established_date", request->get('established_date'));
        $venues->setAttribute("phone_no", request->get('phone_no'));
        $venues->setAttribute("phone_no_2", request->get('phone_no_2'));
        $venues->setAttribute("space_area", request->get('space_area'));
        $venues->setAttribute("person_capacity", request->get('person_capacity'));
        $venues->create();
        $response = $client->request('GET', 'venue_create');
        $data = $response->getBody()->getContents();
        $venue_create = \GuzzleHttp\json_decode($data);


        }
    public function update(FormBuilder $formBuilder)
    {
$venues = new Venue(['base_uri'=> 'http://localhost:8005/api/']);
$venues->setAttributes("name",request->get('name'));
$venues->setAttributes("image",request->get('image'));
$venues->setAttributes("established_date",request->get('established_date'));
$venues->setAttributes("phone_no",request->get('phone_no'));
$venues->setAttributes("phone_no_2",request->get('phone_no_2'));
$venues->setAttributes("space_area",request->get('space_area'));
$venues->setAttributes("person_capacity",request->get('person_capacity'));
$venues->update();


        $response1 = $client->request('GET','venue_update');
        $data1 = $response1->getBody()->getContents();
        $venue_update =  \GuzzleHttp\json_decode($data1);

        public function update(FormBuilder $formBuilder)
    {
        $venues = new Venue(['base_uri'=> 'http://localhost:8005/api/']);
        $venues->setAttributes("name",request->get('name'));
$venues->setAttributes("image",request->get('image'));
$venues->setAttributes("established_date",request->get('established_date'));
$venues->setAttributes("phone_no",request->get('phone_no'));
$venues->setAttributes("phone_no_2",request->get('phone_no_2'));
$venues->setAttributes("space_area",request->get('space_area'));
$venues->setAttributes("person_capacity",request->get('person_capacity'));
$venues->delete();

        $response2 = $client->request('GET','venue_delete');
        $data2 = $response2->getBody()->getContents();
        $venue_delete =  \GuzzleHttp\json_decode($data2);


        public function maintain_venue_info(FormBuilder $formBuilder)
    {
        $venues = new Venue(['base_uri'=> 'http://localhost:8005/api/']);
        $venues->setAttributes("name",request->get('name'));
$venues->setAttributes("image",request->get('image'));
$venues->setAttributes("established_date",request->get('established_date'));
$venues->setAttributes("phone_no",request->get('phone_no'));
$venues->setAttributes("phone_no_2",request->get('phone_no_2'));
$venues->setAttributes("space_area",request->get('space_area'));
$venues->setAttributes("person_capacity",request->get('person_capacity'));
$venues->maintain_venue_info();

        $response3 = $client->request('GET','venue_maintain');
        $data3 = $response3->getBody()->getContents();
        $venue_maintain =  \GuzzleHttp\json_decode($data3);


        public function select(FormBuilder $formBuilder)
    {
        $venues = new Venue(['base_uri'=> 'http://localhost:8005/api/']);
        $venues->setAttributes("name",request->get('name'));
$venues->setAttributes("image",request->get('image'));
$venues->setAttributes("established_date",request->get('established_date'));
$venues->setAttributes("phone_no",request->get('phone_no'));
$venues->setAttributes("phone_no_2",request->get('phone_no_2'));
$venues->setAttributes("space_area",request->get('space_area'));
$venues->setAttributes("person_capacity",request->get('person_capacity'));
$venues->select();

        $response4 = $client->request('GET','venue_select');
        $data4 = $response4->getBody()->getContents();
        $venue_select =  \GuzzleHttp\json_decode($data4);

        public function list(FormBuilder $formBuilder)
    {
        $venues = new Venue(['base_uri'=> 'http://localhost:8005/api/']);
        $venues->setAttributes("name",request->get('name'));
$venues->setAttributes("image",request->get('image'));
$venues->setAttributes("established_date",request->get('established_date'));
$venues->setAttributes("phone_no",request->get('phone_no'));
$venues->setAttributes("phone_no_2",request->get('phone_no_2'));
$venues->setAttributes("space_area",request->get('space_area'));
$venues->setAttributes("person_capacity",request->get('person_capacity'));
$venues->list();

        $response5 = $client->request('GET','venue_list');
        $data5 = $response5->getBody()->getContents();
        $venue_list =  \GuzzleHttp\json_decode($data5);

    }
}
