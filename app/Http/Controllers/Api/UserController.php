<?php

namespace Venue\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Venue\Models\Feedback;
use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;
use Venue\Models\UserType;
use Venue\Models\UserVenue;
use Venue\Models\Venue;
use Venue\Models\VenueMenuItem;


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
    public function GetSpecificUserlist($id)
    {
        try {
            $users = DB::table('users')//table join gareko
            ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->select('user_info.*','users.*')
                ->where('users.id', '=', $id)
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

    public function Search($id){
        try {
            /*return $id;*/
            /*$key = $request->get('search');*/
           /* if ($id != '') {*/

                $result = Venue::where('name', 'like', '%' . $id . '%')
                    /*->orWhere('address', 'like', '%$key%')
                    ->orWhere('person_capacity', 'like', '%$key%')*/
                    /*->orWhere('person_capacity', '>=', '%'.$id.'%')*/
                    ->orWhere('locality', 'like', '%'.$id.'%')
                    ->orderBy('name')
                    ->paginate(20);
                return $result;

        /*    };*/


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


    public function GetUserDetails($id)
    {
        //return $id;
        $usersinfo = new UserInfo();
        $usersinfo = UserInfo::where('user_id', '=', $id)->first();
        // print_r($usersinfo);die();
        return $usersinfo;
    }

     public function EditUserDetails($id)
     {
         /*$usersinfo = DB::table('user_venue')//table join gareko
         ->join('users', 'users.id', '=', 'user_venue.user_id')
             ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
             ->join('user_info', 'user_info.user_id', '=', 'users.id')
             ->select( 'venues.*','users.*','user_info.*')
             ->where('users.id', '=', $id)
             ->get();*/



         $usersinfo = new UserInfo();
         $usersinfo = UserInfo::where('user_id', '=', $id)->first()->toArray();

         return $usersinfo;
     }
    public function EditUserData($id)
    {
        //return $id;
        $usersinfo = new UserInfo();
        $usersinfo = UserInfo::where('user_id', '=', $id)->first()->toArray();
        // print_r($usersinfo);die();
        return $usersinfo;
    }
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
    public function ChangePassword(Request $request){
        //return $request->all();
        $np=$request->get('newpassword');
        $cp=$request->get('comfirmpassword');
        $user=User::where('id','=',$request->get('id'))->select('password','id')->first();
        //return $user;
        if(!Hash::check($request->get('password'),$user->password))
        {
            return 0;
        }
        else
        {
            if($np==$cp) {
                $user = DB::table('users')
                    ->where('id', $request->get('id'))
                    ->update(['password' => bcrypt($request->get('newpassword'))
                    ]);
                return $user;
            }
            else{
                return 1;
            }
        }
    }

   /* public function ChangePassword(Request $request){
        try {
            $authpw = $request->get('pw');
            $id= $request->get('id');
            /*return $id;*/
            /*return $authpw;*/


           /* $op = $request->get('old_password');
            $np = $request->get('new_password');
            $cp = $request->get('cpassword');

            $user=User::where('id','=',$id)->first();*/
            /*return $user;*/

            /*if (bcrypt($op) != $authpw) {
                return redirect()->back();
            }*/


            /*else {*/
                /*if($np==$cp){
                    $user->setAttribute('password', bcrypt($np));
                    $user->save();


                }


            /*}*/
     /*   }
        catch(\Exception $e){
            throw $e;
        }


    }*/
    public function MenuSelect(Request $request){
        return VenueMenuItem::all();
    }


    public function EditInfo(Request $request){
        try{
            $uid=$request->get('user_id');
            $f=$request->get('first_name');
            $l=$request->get('last_name');
            $d=$request->get('dob');
            $u=$request->get('username');
            $n=$request->get('nationality_id');
            $ph=$request->get('phone_no');
            $mn=$request->get('mobile_no');
            $e=$request->get('email');
            /*return $e;*/

            $userinfo=UserInfo::where('user_id', '=', $uid)->first();
            $userinfo->setAttribute('first_name', $f);
            $userinfo->setAttribute('last_name', $l);
            $userinfo->setAttribute('username', $u);
            $userinfo->setAttribute('dob', $d);
            $userinfo->setAttribute('nationality_id', $n);
            $userinfo->setAttribute('phone_no', $ph);
            $userinfo->setAttribute('mobile_no', $mn);
            $userinfo->setAttribute('email', $e);
            $userinfo->save();
        }
        catch(\Exception $e){
            throw $e;
        }
    }


    public function DeleteUserDetails($id){
        $usersinfo = new UserInfo();
        $usersinfo = UserInfo::where('user_id', '=', $id)->first();
        // print_r($usersinfo);die();
        return $usersinfo;
    }

}


