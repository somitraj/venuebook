<?php

namespace Venue\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use Venue\Http\Requests;

class InventoryController extends Controller
{
    public function Inventory(FormBuilder $formBuilder,Request $request)
    {
        $venue_id=$request->id;
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        if($request->getMethod()=='POST') {

            try {

                $response = $client->request('POST', 'inventory', [
                    'form_params' => [
                        'item1' =>  $request->get('item1'),
                        'price_per1' =>  $request->get('price_per1'),

                        'user_id'=>Auth::user()->id,




                    ]
                ]);

                /*print_r($inventorylist);die();*/
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }
            /* print_r($response->getBody()->getContents());
                die();*/
            $request->session()->flash('alert-success', 'Inventory Successfully Updated!');
        }

        $response1 = $client->request('GET', 'inventorylist', [
            'form_params' => [

                'user_id'=>Auth::user()->id,

            ]
        ]);
        $data1 = $response1->getBody()->getContents();
        $inventorylist =  \GuzzleHttp\json_decode($data1);

        $form = $formBuilder->Create('Venue\Forms\InventoryForm',['method'=>'POST','url' => route('manager.inventory')]);


        return view('Layout.Inventory', compact('form','inventorylist'));

    }

}
