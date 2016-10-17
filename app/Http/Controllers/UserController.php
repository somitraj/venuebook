<?php

namespace Venue\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use Venue\User;

class UserController extends BaseController
{
    public function login(FormBuilder $formBuilder,Request $request)
    {
        $form = $formBuilder->Create('Venue\Forms\LoginForm', ['method' => 'POST', 'url' => route('web.login')]);
        if($request->getMethod()=='POST') {
            $client=new Client(['base_uri'=> config('app.REST_API')]);

            $response = $client->request('POST', 'login', [
                'form_params' => [

                    'username' => $request->get('username'),
                    'password'=> $request->get('password')

                ]

        ]);
            $userApi=\GuzzleHttp\json_decode($response->getBody()->getContents())->user;
           // print_r($userApi);Die();
           $user=new User();
            $user->username=$userApi->username;
            $user->password=$userApi->password;
            $user->user_type_id=$userApi->user_type_id;
            Auth::login($user);
         //   return redirect()->route('manager.dash');
           return $this->UserCheck();
        }

        /*print_r($response);die();*/
        return view('Layout.Login', compact('form'));
      /*  die();*/
    }

        public function Register(FormBuilder $formBuilder,Request $request)
    {
       /* print_r(config('app.REST_API'));die();*/
        /*$client = new Client(['base_uri'=>'http://localhost:8005/api']);*/
        $client = new Client(['base_uri'=> config('app.REST_API')]);


/*        $response0 = $client->request('GET','usertype');
        $data0 = $response0->getBody()->getContents();
        $usertype =  \GuzzleHttp\json_decode($data0);*/


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



        if($request->getMethod()=='POST') {
        /*    print_r($request->get('email')); die();*/
            try {
                $pathToFile='uploads/';
                /*return $pathToFile;*/
                $profile_image='null';
                $identity_image='null';
                $uploadfile = $pathToFile . basename($_FILES['profile_image']['name']);
                if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $uploadfile)) {
                    $profile_image='uploads/'.basename($_FILES['profile_image']['name']);
                }
              //  print_r($profile_image);die();
                $uploadfile1 = $pathToFile . basename($_FILES['identity_image']['name']);
                if (move_uploaded_file($_FILES['identity_image']['tmp_name'], $uploadfile1)) {
                    $identity_image='uploads/'.basename($_FILES['identity_image']['name']);
                }
                $response = $client->request('POST', 'register', [
                    'form_params' => [
                         'first_name' =>  $request->get('first_name'),
                         'last_name' =>  $request->get('last_name'),
                        'username' => $request->get('username'),
                        'dob' =>  $request->get('dob'),
                        'nationality_id' =>  $request->get('nationality_id'),
                        'phone_no' =>  $request->get('phone_no'),
                        'mobile_no' =>  $request->get('mobile_no'),
                        'email' => $request->get('email'),
                        'password' => $request->get('password'),
                        'user_type_id' => $request->get('user_type'),
                        'country_id' => $request->get('Country'),
                        'province_id' => $request->get('Province'),
                        'zone_id' => $request->get('Zones'),
                        'district_id' => $request->get('District'),
                        'locality' => $request->get('Locality'),

                        'profile_image' => $profile_image,

                        'identity_image' => $identity_image
                          ]
                          ]);
              /*  print_r($response->getBody()->getContents());
                die();*/
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }
        }





       $form = $formBuilder->Create('Venue\Forms\RegistrationForm',['method'=>'POST','url' => route('web.Register')],[/*'usertype'=>$usertype,*/'country'=>$country,'province'=>$province,'zone'=>$zone,'district'=>$district]);


        return view('Layout.Register', compact('form'));

    }

    public function Address(FormBuilder $formBuilder)
    {

        $form = $formBuilder->Create('Venue\Forms\AddressForm', ['method' => 'POST', 'url' => route('web.Address')]);
        return view('Layout.Address', compact('form'));
    }


    public function Contact()
    {
        return view('Layout.Contact', compact('form'));
    }

    public function Terms()
    {
        return view('Layout.Terms', compact('form'));
    }

    public function Privacy()
    {
        return view('Layout.Privacy', compact('form'));
    }

    public function Manager()
    {
        return view('Layout.Manager', compact('form'));
    }

    public function Admin()
    {
        return view('Layout.Admin', compact('form'));
    }

    public function User()
    {
        return view('Layout.User', compact('form'));
    }

    public function UserCheck()
    {
        if (Auth::check()) {
          // print_r(Auth::user()->user_type_id);die();
            if (Auth::user()->user_type_id == 1) {
                return redirect()->route('admin.dash');
            } else if (Auth::user()->user_type_id == 2) {
               // print_r(Auth::user());die();
                return redirect()->route('manager.dash');
            } else if(Auth::user()->user_type_id == 3) {
              return redirect()->route('web.User');
               //return redirect()->to('/');
            }

        }
    }
    public function Logout(){
        Session::flush();
        return redirect()->route('home');
    }
}