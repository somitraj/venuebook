<?php

namespace Venue\Http\Controllers;

use Dingo\Api\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;

class BookingController extends BaseController
{
    public function Book(FormBuilder $formBuilder,Request $request)
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        $id = $_GET['id'];
        /*print_r($id);die(); */
        if($request->getMethod()=='POST') { //activates register button

            try {
                /*$b=$request->get('booking_date');
                print_r($b);die();*/
                $response = $client->request('POST', 'book1', [
                    'form_params' => [
                        'booking_date' =>  $request->get('booking_date'),
                        'event' =>  $request->get('event'),
                        'booking_time' => $request->get('booking_time'),
                        'venue_id' => $id

                    ]
                ]);
                /*print_r($response->getBody()->getContents());
                die();*/
                return view('Layout.MenuSelection');
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }


        }
        $form = $formBuilder->Create('Venue\Forms\BookingForm',['method'=>'POST','url' => route('web.MenuSelect')]);
        return view('Layout.Book', compact('form'));
       // print_r($form);
        /*die();*/


}
    public function BookTotal(FormBuilder $formBuilder)
    {
        $form = $formBuilder->Create('Venue\Forms\TotalBookingForm',['method'=>'POST','url' => route('web.BookTotal')]);
        return view('Layout.BookTotal', compact('form'));
        // print_r($form); die();



    }
    public  function  MenuSelect(Request $request){
        /*$id = $_GET['id'];
        print_r($id);die(); */
        $client = new Client(['base_uri' => config('app.REST_API')]);
        /*if($request->getMethod()=='POST') {
            try{
                $response = $client->request('POST', 'menuselect', [
                    'form_params' => [
                        'item_name' =>  $request->get('item_name')


                    ]
                ]);

            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }
        }*/
        $response = $client->request('GET','menuselect');
        $data = $response->getBody()->getContents();
        $menudata =  \GuzzleHttp\json_decode($data);
        /*print_r($menudata);die();*/
        return view('Layout.MenuSelection',compact('menudata'));
    }
}
