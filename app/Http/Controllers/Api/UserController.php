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
            $userinfo->status_id=1;
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
                ->join('status','user_info.status_id','=','status.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name')
                ->where('users.user_type_id', '=', 3)
                ->where('status.id','=',1)
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
        $usersinfo = UserInfo::where('user_id', '=', $id)
           //-> where('status_id','=',1)
            ->first();
        // print_r($usersinfo);die();
        return $usersinfo;
    }
    public function DeleteUser($id)
    {
       //return $id;
        $user=UserInfo::where('user_id','=',$id)->select('status_id')->first();
//return $user;
        if($user->status_id==1) {
            $user = DB::table('user_info')
              ->where('user_id', $id)
                ->update(['status_id' => 2
                ]);
            return $user;
        }
        else{
            $user = DB::table('user_info')
                ->where('user_id', $id)
                ->update(['status_id' => 1
                ]);
            return $user;
        }
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function UserDeactive()
    {
        try {

            //return $id;
            $users = DB::table('users')//table join gareko
            ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name')
                ->where('users.user_type_id', '=', 3)
                ->where('status_id','=',2)
                ->get();
            return $users;
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public function UserActive($id)
    {

        $user=UserInfo::where('user_id','=',$id)->first();
        if($user->status_id==2) {

        $user = DB::table('user_info')
            ->where('user_id', $id)
            ->update(['status_id' => 1
            ]);

    }$users = DB::table('users')//table join gareko
    ->join('user_info', 'users.id', '=', 'user_info.user_id')
        ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
        ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name')
        ->where('users.user_type_id', '=', 3)
        ->where('status_id','=',2)
        ->get();
        return $users;


    }

     public function EditUserDetails($id)
     {
         /*return $id;*/
         $usertypeid=User::where('id','=',$id)->first();
         $utype=$usertypeid->user_type_id;
         if($utype==2) {
             $usersinfo = DB::table('user_venue')//table join gareko
             ->join('users', 'users.id', '=', 'user_venue.user_id')
                 ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
                 ->join('user_info', 'user_info.user_id', '=', 'users.id')
                 ->select( 'venues.*','users.*','user_info.*')
                 ->where('users.id', '=', $id)
                 ->get();
             return $usersinfo;
         }
         else {



         $usersinfo = new UserInfo();
         $usersinfo = UserInfo::where('user_id', '=', $id)->first()->toArray();

             return $usersinfo;
         }
     }
    public function EditUserData($id)
    {
        //return $id;
        $usersinfo = new UserInfo();
        $usersinfo = UserInfo::where('user_id', '=', $id)->first()->toArray();
        // print_r($usersinfo);die();
        return $usersinfo;
    }

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

    public function GetSnacks(Request $request,$id){
        /*$venue_id=$request->get('venue_id');*/
        /*return $venue_id;*/
        /*return $id;*/
        $menu = DB::table('tbl_menu_items')//table join gareko
             ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id')
            ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
            ->join('tbl_item_type', 'tbl_item_type.id', '=', 'tbl_menu_items.item_type_id')
             ->select('tbl_menu_items.*', 'venue_menu_items.*','venues.*','tbl_item_type.*')
            ->where('venues.id', '=', $id)
            ->where('tbl_item_type.id', '=', 1)
             ->get();

        /*$menu = DB::table('tbl_item_type')//table join gareko
        ->join('tbl_menu_items', 'tbl_menu_items.item_type_id', '=', 'tbl_item_type.id')
            ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id)')
            ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
            ->select('tbl_menu_items.*', 'venue_menu_items.*','venues.*','tbl_item_type.*')
            ->where('venues.id', '=', $id)
            ->get();*/
        return $menu;
            /*return VenueMenuItem::all();*/
    }
    public function GetDinner(Request $request,$id){
        /*$venue_id=$request->get('venue_id');*/
        /*return $venue_id;*/
        /*return $id;*/
        $menu = DB::table('tbl_menu_items')//table join gareko
        ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id')
            ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
            ->join('tbl_item_type', 'tbl_item_type.id', '=', 'tbl_menu_items.item_type_id')
            ->select('tbl_menu_items.*', 'venue_menu_items.*','venues.*','tbl_item_type.*')
            ->where('venues.id', '=', $id)
            ->where('tbl_item_type.id', '=', 2)
            ->get();

        return $menu;
        /*return VenueMenuItem::all();*/
    }

    public function GetDrinks(Request $request,$id){
        /*$venue_id=$request->get('venue_id');*/
        /*return $venue_id;*/
        /*return $id;*/
        $menu = DB::table('tbl_menu_items')//table join gareko
        ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id')
            ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
            ->join('tbl_item_type', 'tbl_item_type.id', '=', 'tbl_menu_items.item_type_id')
            ->select('tbl_menu_items.*', 'venue_menu_items.*','venues.*','tbl_item_type.*')
            ->where('venues.id', '=', $id)
            ->where('tbl_item_type.id', '=', 3)
            ->get();

        return $menu;
        /*return VenueMenuItem::all();*/
    }
    public function GetExtra(Request $request,$id){
        /*$venue_id=$request->get('venue_id');*/
        /*return $venue_id;*/
        /*return $id;*/
        $menu = DB::table('tbl_menu_items')//table join gareko
        ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id')
            ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
            ->join('tbl_item_type', 'tbl_item_type.id', '=', 'tbl_menu_items.item_type_id')
            ->select('tbl_menu_items.*', 'venue_menu_items.*','venues.*','tbl_item_type.*')
            ->where('venues.id', '=', $id)
            ->where('tbl_item_type.id', '=', 4)
            ->get();

        return $menu;
        /*return VenueMenuItem::all();*/
    }

    public function GetDessert(Request $request,$id){
        /*$venue_id=$request->get('venue_id');*/
        /*return $venue_id;*/
        /*return $id;*/
        $menu = DB::table('tbl_menu_items')//table join gareko
        ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id')
            ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
            ->join('tbl_item_type', 'tbl_item_type.id', '=', 'tbl_menu_items.item_type_id')
            ->select('tbl_menu_items.*', 'venue_menu_items.*','venues.*','tbl_item_type.*')
            ->where('venues.id', '=', $id)
            ->where('tbl_item_type.id', '=', 5)
            ->get();

        return $menu;
        /*return VenueMenuItem::all();*/
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
    public function EditVenueInfo(Request $request){
        try{
            $uid=$request->get('user_id');
            $f=$request->get('first_name');
            $l=$request->get('last_name');
            $vn=$request->get('name');
            $edb=$request->get('established_date');
            $u=$request->get('username');
            $n=$request->get('nationality_id');
            $ph=$request->get('phone_no');
            $ph2=$request->get('phone_no_2');
            $sa=$request->get('space_area');
            $pc=$request->get('person_capacity');
            $e=$request->get('email');
            $hc=$request->get('hall_charge');
            /*return $vn;*/

            $ven=UserVenue::where('user_id', '=', $uid)->first();
            $vid=$ven->venue_id;
           /* return $vid;*/
            $userinfo=UserInfo::where('user_id', '=', $uid)->first();
            $userinfo->setAttribute('first_name', $f);
            $userinfo->setAttribute('last_name', $l);
            $userinfo->setAttribute('username', $u);
            $userinfo->setAttribute('nationality_id', $n);
            $userinfo->setAttribute('phone_no', $ph);
            $userinfo->setAttribute('email', $e);
            $userinfo->save();

            $venue=Venue::where('id', '=', $vid)->first();
            $venue->setAttribute('name', $vn);
            $venue->setAttribute('established_date', $edb);
            $venue->setAttribute('phone_no', $ph);
            $venue->setAttribute('phone_no_2', $ph2);
            $venue->setAttribute('space_area', $sa);
            $venue->setAttribute('person_capacity', $pc);
            $venue->setAttribute('hall_charge', $hc);
            $venue->save();






        }
        catch(\Exception $e){
            throw $e;
        }
    }


}


