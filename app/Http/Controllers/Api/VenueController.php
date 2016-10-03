<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;
use Venue\Models\Venue;

class VenueController extends Controller
{
    public function Register(Request $request){

       /*return $request->all();*/
       /* $user=User::create($request->all());*/
        try{
            $user=new User();
            $user->setAttribute('username',$request->get('username'));
            $user->setAttribute('password',bcrypt($request->get('password')));
            $user->setAttribute('email',$request->get('email'));
            $user->user_type_id=$request->user_type_id;


            $user->save();



          /*  $venue=new Venue();
            $venue->setAttribute('username',$request->get('username'));*/
           // return $user;
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            /*$user->save();*/

           /* $userinfo=new UserInfo();
            $userinfo->setAttribute('first_name',$request->get('first_name'));
            $userinfo->setAttribute('last_name',$request->get('last_name'));
            $userinfo->setAttribute('username',$user->username);*/
            /*$userinfo->setAttribute('password',$user->password);*/
           /* $userinfo->setAttribute('user_id',$user->id);
            $userinfo->setAttribute('email',$user->email);
            $userinfo->country_id=$request->country_id;
            $userinfo->province_id=$request->province_id;
            $userinfo->zone_id=$request->zone_id;
            $userinfo->phone_no=$request->phone_no;
            $userinfo->mobile_no=$request->mobile_no;
            $userinfo->district_id=$request->district_id;
            $userinfo->nationality_id=$request->nationality_id;*/

          /*  $userinfo->setAttribute('locality',$request->get('locality'));


            $userinfo->save();*/
            /*return $userinfo;*/
        }


        catch(\Exception $e){
            throw $e;
        }


    }

}
