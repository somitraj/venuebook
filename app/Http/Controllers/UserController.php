<?php

namespace Venue\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use Venue\Models\UserInfo;
use Venue\Models\UserVenue;
use Venue\Models\Venue;
use Venue\User;
use Venue\Models\UserType;

class UserController extends BaseController
{
    public function login(FormBuilder $formBuilder,Request $request) //for login
    {
       try{
        if (Auth::check()) {   //checks user is logged in and if logged in and user try to go back to login page,home is returned
            return view('Layout.Home', compact('form'));

        } else { //if not logged in,login page is displayed
            $form = $formBuilder->Create('Venue\Forms\LoginForm', ['method' => 'POST', 'url' => route('web.login')]);
            if ($request->getMethod() == 'POST') {  //activates login button
                $client = new Client(['base_uri' => config('app.REST_API')]);

                $response = $client->request('POST', 'login', [
                    'form_params' => [

                        'username' => $request->get('username'),
                        'password' => $request->get('password')

                    ]

                ]);
                $userApi = \GuzzleHttp\json_decode($response->getBody()->getContents())->user; //api bata json format bata ako lai decode gareko

                $user = new User();
                $user->id = $userApi->id;
                $user->username = $userApi->username;
                $user->password = $userApi->password;
                /*$user->profile_image=$userApi->profile_image;*/
                $user->user_type_id = $userApi->user_type_id;
                Auth::login($user);


                //   return redirect()->route('manager.dash');
                return $this->UserCheck();
            }

            /*print_r($response);die();*/
            return view('Layout.Login', compact('form'));
        }


        }
       catch(\Exception $e)
       {
           print_r($e->getMessage());die();
       }
    }


        public function Register(FormBuilder $formBuilder,Request $request)
    {

        $client = new Client(['base_uri'=> config('app.REST_API')]);

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



        if($request->getMethod()=='POST') { //activates register button
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
                $response = $client->request('POST', 'register', [ //fetching form datas
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
            $request->session()->flash('alert-success', 'Registration Successful!');
        }





       $form = $formBuilder->Create('Venue\Forms\RegistrationForm',['method'=>'POST','url' => route('web.Register')],['country'=>$country,'province'=>$province,'zone'=>$zone,'district'=>$district]);


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

    public function Item(FormBuilder $formBuilder)
    {
        $form = $formBuilder->Create('Venue\Forms\ItemForm', ['method' => 'POST', 'url' => route('web.Item')]);
        return view('Layout.Item', compact('form'));
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
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getnotice');
        $data = $response->getBody()->getContents();
        $notices =  \GuzzleHttp\json_decode($data);
        /* print_r($notices);die();*/
        /*return view('Layout.Notification',compact('notices'));*/
        return view('Layout.Admin', compact('form','notices'));
    }

    public function User()
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','slider');
        $data = $response->getBody()->getContents();
        $sliders =  \GuzzleHttp\json_decode($data);

        return view('Layout.User', compact('sliders'));
    }


    public function Lainchaur(Request $request)
    {
        $venue_id=$request->venue_id;

        return view('Layout.Lainchaur', compact('form'));
    }

    public function Sasa()
    {
        return view('Layout.Sasa', compact('form'));
    }
    public function Shanker()
    {
        return view('Layout.Shanker', compact('form'));
    }
    public function Star()
    {
        return view('Layout.Star', compact('form'));
    }
    public function Athiti()
    {
        return view('Layout.Athiti', compact('form'));
    }
    public function Hyatt()
    {
        return view('Layout.Hyatt', compact('form'));
    }
    public function Thapagaun()
    {
        return view('Layout.Thapagaun', compact('form'));
    }
    public function Durbar()
    {
        return view('Layout.Durbar', compact('form'));
    }
    public function Radisson()
    {
        return view('Layout.Radisson', compact('form'));
    }

    public function VenuePage(Request $request)
    {
        $venue_id=$request->id;
        /*print_r($venue_id);die();*/
        try{

           /* print_r($request->id);die();*/

        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET','getvenuedata1/'.$venue_id/*,[
            'form_params' => [
                'venue_id' => $venue_id,
            ]
        ]*/);

        $data = $response->getBody()->getContents();
       // print_r($data);die();
        $vdata =  \GuzzleHttp\json_decode($data);
        /*print_r($vdata);die();*/
        return view('Layout.MasterSlider', compact('vdata'));
        }
        catch(\Exception $e)
        {
            print_r($e->getMessage());die();
        }
    }

    public function ManagerVenuePage(Request $request)
    {
        $id1=$request->id;
        /*print_r($id1);die();*/
        try{

            /* print_r($request->id);die();*/

            $client = new Client(['base_uri' => config('app.REST_API')]);
            $response = $client->request('GET','getvenuebyuserid/'.$request->id);

            $data = $response->getBody()->getContents();
            // print_r($data);die();
            $vdata =  \GuzzleHttp\json_decode($data);
            /*print_r($vdata);die();*/

            return view('Layout.MasterSlider', compact('vdata'));
        }
        catch(\Exception $e)
        {
            print_r($e->getMessage());die();
        }
    }
    public function UserList()
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        $response = $client->request('GET','userlist');
        $data = $response->getBody()->getContents();
        $userlist =  \GuzzleHttp\json_decode($data);
      //  $UsersList = $userlist->user_types;
      //  print_r($userlist);die();
        return view('Layout.Userlist',compact('userlist'));
    }
    public function ManagerList()
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        $response = $client->request('GET','managerlist');
        $data = $response->getBody()->getContents();
        $managerlist =  \GuzzleHttp\json_decode($data);
        return view('Layout.Managerlist',compact('managerlist'));
    }

    public function EditUserDetails(FormBuilder $formBuilder,$id){
        $client = new Client(['base_uri' => config('app.REST_API')]);
       // print_r($client);die();
        $response = $client->request('POST','edituser/'.$id);
        $data = $response->getBody()->getContents();
        $edituser =  \GuzzleHttp\json_decode($data);
    // print_r($edituser);die();

        $form = $formBuilder->Create(\Venue\Forms\DetailsForm::class, ['method' => 'POST', 'url' =>'admin/useredit'],
            [
               'id'=>$edituser->id,
                'first_name' => $edituser->first_name,
                'last_name' =>  $edituser->last_name,
                'username' => $edituser->username,
                'dob' =>  $edituser->dob,
                'nationality_id' =>  $edituser->nationality_id,
                'phone_no' =>  $edituser->phone_no,
                'mobile_no' =>  $edituser->mobile_no,
                'email' => $edituser->email
               // 'password' => $edituser->password,
                //'user_type_id' => $edituser->user_type,
              // 'country_id' => $edituser->Country,
               // 'province_id' => $edituser->Province,
                //'zone_id' => $edituser->Zones,
                //'district_id' => $edituser->District,
              //  'locality' => $edituser->Locality,

               // 'profile_image' => $edituser->profile_image,


                //'identity_image' => $edituser->identity_image
            ]);
//print_r($viewuserdetails);die();

        return view('Layout.Edituser',compact('form'));
       // return redirect()->route('Viewdetails.userlist');


    }

   /* public function GetProfileImage(){
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        $response = $client->request('GET','getimage');
        $data = $response->getBody()->getContents();
        $getimage =  \GuzzleHttp\json_decode($data);


    }*/
    public function ViewUserDetails($id){
        $client = new Client(['base_uri' => config('app.REST_API')]);

        $response = $client->request('POST', 'userdetails/' . $id);
       // print_r($response);die();
        $data = $response->getBody()->getContents();
       // print_r($data);die();
        $userdetails = \GuzzleHttp\json_decode($data);
         //print_r($userdetails);die();
        return view('Layout.Viewuserdetails',compact('userdetails'));
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
            else{
                return redirect()->route('Home');
            }

        }

    }
    public function Logout(){
        Session::flush();
        return redirect()->route('home');
    }

    public function  Details(){
       /* $users=new User();*/
        $users=User::all();

        $venues=Venue::all();
        $info=UserVenue
            ::join('users','users.id','=','UserVenue.user_id')
            ->join('venues','venues.id','=','UserVenue.venue_id')
            ->select('users.email','venues.phone_no','venues.phone_no_2','venues.person_capacity','venues.space_area','venues.locality','venues.established_date')
            ->get();

        return view('Layout.Admin',compact('users','venues','UserVenue'));

    }

}