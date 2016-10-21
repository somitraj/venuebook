<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Venue\Models\Feedback;
use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;
use Venue\Models\UserType;
use Venue\Models\Venue;

class UserController extends Controller
{
    public function Register(Request $request){

       /*return $request->all();*/
       /* $user=User::create($request->all());*/
        try{
            $user=new User();  //model ko User ko object create
            $user->setAttribute('username',$request->get('username'));   //setting data from form to table column
            $user->setAttribute('password',bcrypt($request->get('password')));
            $user->setAttribute('email',$request->get('email'));
            $user->user_type_id=$request->user_type_id;
           // return $user;
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            $user->save();



        $userinfo=new UserInfo();
        $userinfo->setAttribute('first_name',$request->get('first_name'));
        $userinfo->setAttribute('last_name',$request->get('last_name'));
        $userinfo->setAttribute('username',$user->username);  //$user ma vako feri $userinfo ma fetch garne
        $userinfo->setAttribute('user_id',$user->id);
        $userinfo->setAttribute('dob',$request->get('dob'));
        $userinfo->setAttribute('email',$user->email);
        $userinfo->country_id=$request->country_id;
        $userinfo->province_id=$request->province_id;
        $userinfo->zone_id=$request->zone_id;
        $userinfo->phone_no=$request->phone_no;
        $userinfo->mobile_no=$request->mobile_no;
        $userinfo->district_id=$request->district_id;
        $userinfo->nationality_id=$request->nationality_id;

        $userinfo->setAttribute('locality',$request->get('locality'));





        $userinfo->save();
        /*return $userinfo;*/
        }
        catch(\Exception $e){
            throw $e;
        }


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
    public function GetProfile(Request $request){
        try{
            $userinfo=UserInfo::all()->where('user_id','=',$request->get('user_id'))->toArray();
            return $userinfo;
       }
        catch(\Exception $e){
            throw $e;
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function GetUserlist(Request $request)
    {
        try {

           /* $users = new User();
             $users=User::all();
            $users=UserInfo::all();
            $users=UserType::all();*/

          // $users = User::where('user_type_id', '=', '3')->get();  //yesle kati client xa vanera list ma dekhauxa
            // print_r($users);die();
            /*$all_user=User::count();*/

            //$all_user = User::where('user_type_id', '=', '3')->count(); //yesle kati client xa vaney number count garxa
            // print_r($all_user);die();
            /* $all_students=User::where('role_type','=','2')->count();*/
            // print_r($all_admin);die();
            //yesle client ko list ra number return garxa userlistma compact form ma
           // return view('Layout.Userlist', compact('users', 'all_user'));
            $users =DB::table('users')  //table join gareko
                ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select('users.*', 'user_info.first_name','user_info.last_name', 'user_types.type_name')
                ->where('users.user_type_id', '=', 3)
                ->get();
            return $users;
        }
        catch(\Exception $e){
            throw $e;
        }

    }
    //yesko work pani mathi ko getindex ko jastai same ho
    public function GetManagerList(Request $request)
    {
        try{
           /* $users = new User();
            $users=User::all();
            $users=UserInfo::all();
            $users=UserType::all();*/

            $users = DB::table('users')
                ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select('users.*', 'user_info.first_name','user_info.last_name', 'user_types.type_name')
                ->where('users.user_type_id', '=', 2)
                ->get();
            return $users;
       // $users=new User();
        //$users=User::all();
      //  $users=User::where('user_type_id','=','2')->get();
        /*$all_user=User::count();*/
      //  $all_manager=User::where('user_type_id','=','2')->count();
        //print_r($all_manager);die();
        //    return $users;
          //  return $all_manager;
        //return view('Layout.Managerlist',compact('users','all_manager'/*,'all_admin','all_students'*/));

    }
        catch(\Exception $e){
                throw $e;
            }

    }

}
