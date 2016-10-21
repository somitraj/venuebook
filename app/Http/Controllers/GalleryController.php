<?php

namespace Venue\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Venue\Http\Requests;
use GuzzleHttp\Client;

use Venue\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function Gallery(FormBuilder $formBuilder,Request $request)
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        if($request->getMethod()=='POST') {

            /*print_r($request->get('email')); die();*/
            try {

                $response = $client->request('POST', 'feedback', [
                    'form_params' => [
                        'cover' =>  $request->get('cover'),
                        'image1' =>  $request->get('image1'),
                        'image2' => $request->get('image2'),
                        'image3' => $request->get('image3'),
                        'image4' => $request->get('image4')


                    ]
                ]);
                /*print_r($response->getBody()->getContents());
                die();*/
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }

            $request->session()->flash('alert-success', 'Gallery Updated!');
        }





        $form = $formBuilder->Create('Venue\Forms\GalleryForm',['method'=>'POST','url' => route('web.Gallery')]);


        return view('Layout.Gallery', compact('form'));








    }

}
