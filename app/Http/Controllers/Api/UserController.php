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
use Venue\Models\UserVenue;
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
 /*   public function GetProfile(Request $request){
        try{
            $userinfo=UserInfo::all()->where('user_id','=',$request->get('user_id'))->toArray();
            return $userinfo;
       }
        catch(\Exception $e){
            throw $e;
        }
    }*/

    public function GetDetails(){
        return UserInfo::all()->toArray();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function GetUserlist(Request $request)
    {
        try {


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
               ->join('user_venue', 'users.id', '=', 'user_venue.user_id')
               ->join('venues','user_venue.venue_id','=','venues.id')
                ->select('users.*', 'user_info.first_name','user_info.last_name', 'user_types.type_name','venues.name')
                ->where('users.user_type_id', '=', 2)
                ->get();

           return $users;

    }
        catch(\Exception $e){
                throw $e;
            }


    }

    public function Search(Request $request){
        try {
            $key = $request->get('search');
            /*if ($key != '') {*/

                $result = Venue::where('name', 'like', '%' . $key . '%')
                    /*->orWhere('address', 'like', '%$key%')
                    ->orWhere('person_capacity', 'like', '%$key%')
                    ->orWhere('locality', 'like', '%$key%')*/
                    ->orderBy('name')
                    ->paginate(20);
                return $result;

           /* };*/

        }
        catch(\Exception $e){
            throw $e;
        }


    }
    public function UserAccount($id){
        try {
            //return $id;
           /* /*$user_id=$request->get('user_id');
            return $user_id;*/
            $useraccount = DB::table('user_info')
                ->join('users', 'users.id', '=', 'user_info.user_id')
                ->select('users.*', 'user_info.*')
                ->where('users.id', '=', $id)
                ->get();
            return $useraccount;
        }
        catch(\Exception $e){
            throw $e;
        }
    }





}
