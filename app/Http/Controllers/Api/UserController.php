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
    public function Register(Request $request)
    {

        /*return $request->all();*/
        /* $user=User::create($request->all());*/
        try {
            $user = new User();  //model ko User ko object create
            $user->setAttribute('username', $request->get('username'));   //setting data from form to table column
            $user->setAttribute('password', bcrypt($request->get('password')));
            $user->setAttribute('email', $request->get('email'));
            $user->user_type_id = $request->user_type_id;
            // return $user;
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            $user->save();


            $userinfo = new UserInfo();
            $userinfo->setAttribute('first_name', $request->get('first_name'));
            $userinfo->setAttribute('last_name', $request->get('last_name'));
            $userinfo->setAttribute('username', $user->username);  //$user ma vako feri $userinfo ma fetch garne
            $userinfo->setAttribute('user_id', $user->id);
            $userinfo->setAttribute('dob', $request->get('dob'));
            $userinfo->setAttribute('email', $user->email);
            $userinfo->country_id = $request->country_id;
            $userinfo->province_id = $request->province_id;
            $userinfo->zone_id = $request->zone_id;
            $userinfo->phone_no = $request->phone_no;
            $userinfo->mobile_no = $request->mobile_no;
            $userinfo->district_id = $request->district_id;
            $userinfo->nationality_id = $request->nationality_id;

            $userinfo->setAttribute('locality', $request->get('locality'));


            $userinfo->save();


            /*return $userinfo;*/

        } catch (\Exception $e) {
            throw $e;
        }


    }


    public function Feedback(Request $request)
    {
        try {
            $feed = new Feedback();
            $feed->setAttribute('first_name', $request->get('first_name'));
            $feed->setAttribute('last_name', $request->get('last_name'));
            $feed->setAttribute('email', $request->get('email'));
            $feed->setAttribute('comment', $request->get('comment'));
            /*return $feed;*/
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            $feed->save();
        } catch (\Exception $e) {
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
       }

       /**
        * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
        */

    public function GetDetails(){
        return UserInfo::all()->toArray();
    }

    public function GetUserlist(Request $request)
    {
        try {


            $users = DB::table('users')//table join gareko
            ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name')
                ->where('users.user_type_id', '=', 3)
                ->get();
            return $users;
        } catch (\Exception $e) {
            throw $e;
        }

    }


    //yesko work pani mathi ko getindex ko jastai same ho
    public function GetManagerList(Request $request)
    {
        try {
            /* $users = new User();
             $users=User::all();
             $users=UserInfo::all();
             $users=UserType::all();*/


            $users = DB::table('users')
                ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->join('user_venue', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'user_venue.venue_id', '=', 'venues.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name', 'venues.name')
                ->where('users.user_type_id', '=', 2)
                ->get();

            return $users;

        } catch (\Exception $e) {
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


    public function GetUserDetails($id)
    {
        //return $id;
        $usersinfo = new UserInfo();
        $usersinfo = UserInfo::where('user_id', '=', $id)->first()->toArray();
        // print_r($usersinfo);die();
        return $usersinfo;
    }

    /* public function EditUser($id)
     {
         //return $id;
         /* $usersinfo = new UserInfo();
          $usersinfo = UserInfo::where('user_id', '=', $id)->first()->toArray();
          // print_r($usersinfo);die();
          return $usersinfo;*/
    /* try {*/


    /* $usersinfo = DB::table('user_info')//table join gareko
     ->join('tbl_countries', 'user_info.country_id', '=', 'tbl_countries.id')
         ->join('tbl_zones', 'user_info.zone_id', '=', 'tbl_zones.id')
         ->join('tbl_district', 'user_info.district_id', '=', 'tbl_district.id')
        // ->join('tbl_district', 'tbl_zones.id', '=', 'tbl_district.zone_id')
         ->select('user_info.first_name','user_info.last_name','user_info.username','user_info.phone_no','user_info.mobile_no','user_info.nationality_id','tbl_countries.name','tbl_zones.name','tbl_district.name')
        ->where('user_info.user_id', '=', $id)
     ->get();*/
    /* $usersinfo = DB::select(DB::raw("SELECT user_info.id , user_info.user_id , user_info.first_name , user_info.last_name , user_info.username , user_info.dob , user_info.email , user_info.nationality_id , user_info.phone_no , user_info.mobile_no , tbl_countries.name , tbl_zones.name , tbl_district.name
FROM venue.user_info
INNER JOIN venue.tbl_countries
ON (user_info.country_id = tbl_countries.id)
INNER JOIN venue.tbl_zones ON (user_info.zone_id = tbl_zones.id)
INNER JOIN venue.tbl_district ON (tbl_district.zone_id = tbl_zones.id)
AND (user_info.district_id = tbl_district.id)
WHERE (user_info.user_id=51)"));
     //print_r($usersinfo);die();
     return $usersinfo;
 } catch (\Exception $e) {
     throw $e;
 }
}*/

}


