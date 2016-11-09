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
       try {
           $id = Auth::user()->id;
           /*print_r($id);die();*/
           $client = new Client(['base_uri' => config('app.REST_API')]);
           if ($request->getMethod() == 'POST') {

               try {

                   $response = $client->request('POST', 'inventory', [
                       'form_params' => [
                           'item1' => $request->get('item1'),
                           'price_per1' => $request->get('price_per1'),
                           'item_type_id' => $request->get('item_type'),

                           'user_id' =>$id,


                       ]
                   ]);
                   /*print_r($response->getBody()->getContents());
                   die();*/
                   /*print_r($inventorylist);die();*/
               } catch (\Exception $e) {
                   print_r($e->getMessage());
                   die();
               }

               $request->session()->flash('alert-success', 'Inventory Successfully Updated!');
           }

           $response1 = $client->request('POST', 'inventorylist/'.$id);
           $data1 = $response1->getBody()->getContents();
           /*print_r($data1);die();*/
           $inventorylist = \GuzzleHttp\json_decode($data1);
           /*print_r($inventorylist);die();*/
           /*print_r($response1->getBody()->getContents());
                  die();*/
           $client = new Client(['base_uri'=> config('app.REST_API')]);

           $response = $client->request('GET','item_type');
           $data = $response->getBody()->getContents();

           $item_type =  \GuzzleHttp\json_decode($data);
           /*print_r($item_type);die();*/

           $form = $formBuilder->Create('Venue\Forms\InventoryForm', ['method' => 'POST', 'url' => route('manager.inventory')],
               ['item_type'=>$item_type]);


           return view('Layout.Inventory', compact('form', 'inventorylist'));
       }
       catch (\Exception $e) {
           print_r($e->getMessage());
           die();
       }

    }

}
