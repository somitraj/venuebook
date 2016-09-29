<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;

class UserController extends Controller
{
    public function Register(Request $request){

       /*return $request->all();*/
       /* $user=User::create($request->all());*/
        $user=new User();
        $user->setAttribute('username',$request->get('username'));
        $user->setAttribute('password',$request->get('password'));
        $user->setAttribute('email',$request->get('email'));
        /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
        $user->save();


      /*  $userinfo=new UserInfo();
        $userinfo->setAttribute('first_name',$request->get('first_name'));
        $userinfo->setAttribute('user_id',$user->getAttribute('id'));
        $userinfo->save();*/



    }
}
