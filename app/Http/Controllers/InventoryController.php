<?php

namespace Venue\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Kris\LaravelFormBuilder\FormBuilder;
use Venue\Http\Requests;

class InventoryController extends Controller
{
    public function Inventory(FormBuilder $formBuilder,Request $request)
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        if($request->getMethod()=='POST') {

            try {

                $response = $client->request('POST', 'inventory', [
                    'form_params' => [
                        'item1' =>  $request->get('item1'),
                        'price_per1' =>  $request->get('price_per1'),

                        'item2' =>  $request->get('item2'),
                        'price_per2' =>  $request->get('price_per2'),

                        'item3' =>  $request->get('item3'),
                        'price_per3' =>  $request->get('price_per3'),

                        'item4' =>  $request->get('item4'),
                        'price_per4' =>  $request->get('price_per4'),

                        'item5' =>  $request->get('item5'),
                        'price_per5' =>  $request->get('price_per5'),




                    ]
                ]);
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }

            $request->session()->flash('alert-success', 'Inventory Successfully Updated!');
        }

        $form = $formBuilder->Create('Venue\Forms\InventoryForm',['method'=>'POST','url' => route('manager.inventory')]);


        return view('Layout.Inventory', compact('form'));

    }

}
