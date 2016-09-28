<?php

namespace Venue\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use Kris\LaravelFormBuilder\FormBuilder;

class RegisterController extends Controller
{
    public function Register(FormBuilder $formBuilder, Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8005/api/']);

        $response = $client->request('GET', 'country');
        $data = $response->getBody()->getContents();
        $country = \GuzzleHttp\json_decode($data);

        $response1 = $client->request('GET', 'province');
        $data1 = $response1->getBody()->getContents();

        $province = \GuzzleHttp\json_decode($data1);

        $response2 = $client->request('GET', 'zone');
        $data2 = $response2->getBody()->getContents();
        $zone = \GuzzleHttp\json_decode($data2);

        $response3 = $client->request('GET', 'district');
        $data3 = $response3->getBody()->getContents();
        $district = \GuzzleHttp\json_decode($data3);

        if($request->getMethod()=='POST') {

            $response = $client->request('POST', 'register', [
                'form_params' => [

                    'email' => $request->get('email_address'),
                    'password' => $request->get('password'),

                ]
            ]);

        $form = $formBuilder->Create('Venue\Forms\RegistrationForm', ['method' => 'POST', 'url' => route('web.Register')], ['country' => $country, 'province' => $province, 'zone' => $zone, 'district' => $district]);


        return view('Layout.Register', compact('form'));


/*        $data =  Input::except(array('_token')) ;
        $rule  =  array(
            'first_name'       => 'required|unique:registered_users',
            'email_address'      => 'required|email|unique:registered_users',
            'password'   => 'required|min:6|same:cpassword',
            'confirm_password'  => 'required|min:6'
        ) ;

        $validator = Validator::make($data,$rule);

        if ($validator->fails())
        {
            return Redirect::to('register')
                ->withErrors($validator->messages());
        }
        else
        {
            Register::saveFormData(Input::except(array('_token','confirm_password')));

            return Redirect::to('Layout/Register')
                ->withMessage('Data inserted');
        }*/
    }
    }
}
