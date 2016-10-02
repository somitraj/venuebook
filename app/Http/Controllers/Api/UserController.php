<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Models\Feedback;
use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;

class UserController extends Controller
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
           // return $user;
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            $user->save();
        }
        catch(\Exception $e){
            throw $e;
        }



        $userinfo=new UserInfo();
        $userinfo->setAttribute('first_name',$request->get('first_name'));
        $userinfo->setAttribute('last_name',$request->get('last_name'));
        $userinfo->setAttribute('username',$user->username);
        $userinfo->setAttribute('dob',$request->get('dob'));
        /*$userinfo->setAttribute('password',$user->password);*/
        $userinfo->setAttribute('user_id',$user->id);
        $userinfo->setAttribute('email',$user->email);
        $userinfo->country_id=$request->country_id;
        $userinfo->province_id=$request->province_id;
        $userinfo->zone_id=$request->zone_id;
        $userinfo->phone_no=$request->phone_no;
        $userinfo->mobile_no=$request->mobile_no;
        $userinfo->district_id=$request->district_id;
        $userinfo->nationality_id=$request->nationality_id;

        $userinfo->setAttribute('locality',$request->get('locality'));


        $userinfo->setAttribute('profile_image',$request->get('profile_image'));


        $userinfo->setAttribute('identity_image',$request->get('identity_image'));
        /**/

        $userinfo->save();
        /*return $userinfo;*/




    }


    public function Feedback(Request $request){
        try{
            $feed=new Feedback();
            $feed->setAttribute('first_name',$request->get('first_name'));
            $feed->setAttribute('last_name',$request->get('last_name'));
            $feed->setAttribute('email',$request->get('email'));
            $feed->setAttribute('comment',$request->get('comment'));
            /*return $feed;*/
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            $feed->save();
        }
        catch(\Exception $e){
            throw $e;
        }

    }
}
