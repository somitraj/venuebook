<?php

namespace Venue\Http\Controllers;

use Illuminate\Http\Request;

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
                        'first_name' =>  $request->get('first_name'),
                        'last_name' =>  $request->get('last_name'),
                        'email' => $request->get('email'),
                        'comment' => $request->get('comment')

                    ]
                ]);
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }

            $request->session()->flash('alert-success', 'Menu Successfully Updated!');
        }

        $form = $formBuilder->Create('Venue\Forms\InventoryForm',['method'=>'POST','url' => route('manager.inventory')]);


        return view('Layout.Inventory', compact('form'));

    }
}
}
