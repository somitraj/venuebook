<?php

namespace Venue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*use Venue\Feedback;*/

class FeedbackController extends BaseController
{
    public function Feedback(FormBuilder $formBuilder,Request $request)
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        if($request->getMethod()=='POST') {

       /*print_r($request->get('email')); die();*/
        try {

            $response = $client->request('POST', 'feedback', [
                'form_params' => [
                    'first_name' =>  $request->get('first_name'),
                    'last_name' =>  $request->get('last_name'),
                     'email' => $request->get('email'),
                    'comment' => $request->get('comment')

                ]
            ]);
              /*print_r($response->getBody()->getContents());
              die();*/
        }
        catch(\Exception $e)
        {
            print_r($e->getMessage());die();
        }

            $request->session()->flash('alert-success', 'Feedback Successfully Sent!');
    }





        $form = $formBuilder->Create('Venue\Forms\FeedbackForm',['method'=>'POST','url' => route('web.Feedback')]);


        return view('Layout.Feedback', compact('form'));







/*        $form = $formBuilder->Create('Venue\Forms\FeedbackForm',['method'=>'POST','url' => route('web.Feedback')]);*/
       /* return view('Layout.Feedback', compact('form'));*/
       // print_r($form);
        /*die();*/


}
}
