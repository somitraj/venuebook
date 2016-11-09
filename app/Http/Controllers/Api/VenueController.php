<?php

namespace Venue\Http\Controllers\Api;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Venue\Models\TblMenuItem;
use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;
use Venue\Models\UserVenue;
use Venue\Models\Venue;
use Venue\Models\VenueMenuItem;
use Venue\Models\VenueType;
use Venue\Models\Status;



class VenueController extends Controller
{
    public function GetVenueType(Request $request)
    {
        return VenueType::all()->toArray(); //database bata list nikalera array ma rakhne
    }

    /**
     * @param Request $request
     * @throws \Exception
     */
    public function Register(Request $request)
    {


        try {
            $user = new User();
            $user->setAttribute('username', $request->get('username'));
            $user->setAttribute('password', bcrypt($request->get('password')));
            $user->setAttribute('email', $request->get('email'));
            $user->user_type_id = $request->user_type_id;
            $user->save();


            $userinfo = new UserInfo();
            $userinfo->setAttribute('first_name', $request->get('first_name'));
            $userinfo->setAttribute('last_name', $request->get('last_name'));
            $userinfo->setAttribute('username', $user->username);
            $userinfo->setAttribute('user_id', $user->id);
            $userinfo->setAttribute('email', $user->email);
            $userinfo->country_id = $request->country_id;
            $userinfo->province_id = $request->province_id;
            $userinfo->zone_id = $request->zone_id;
            $userinfo->phone_no = $request->phone_no;
            $userinfo->mobile_no = $request->mobile_no;
            $userinfo->district_id = $request->district_id;
            $userinfo->nationality_id = $request->nationality_id;
            $userinfo->setAttribute('profile_image', $request->get('profile_image'));

            $userinfo->setAttribute('locality', $request->get('locality'));
            $userinfo->status_id=1;

            $userinfo->save();


            $venues = new Venue();
            $venues->name = $request->name;
            $venues->country_id = $request->country_id;
            $venues->province_id = $request->province_id;
            $venues->zone_id = $request->zone_id;
            $venues->phone_no = $request->phone_no;
            $venues->phone_no_2 = $request->phone_no_2;
            $venues->space_area = $request->space_area;
            $venues->person_capacity = $request->person_capacity;
            $venues->hall_charge = $request->hall_charge;
            $venues->district_id = $request->district_id;
            $venues->established_date = $request->established_date;
            $venues->image = $request->image;
            $venues->image = $request->image;
            $venues->setAttribute('country_id', $userinfo->country_id);
            $venues->setAttribute('locality', $request->get('locality'));
            $venues->venue_type_id = $request->venue_type_id;
            $venues->status_id=1;
            $venues->save();
            //$venues->userVenues();

            $uservenue = new UserVenue();
            $uservenue->user_id = $user->id;
            $uservenue->venue_id = $venues->id;
            $uservenue->status_id=1;
            $uservenue->save();


        } catch (\Exception $e) {
            throw $e;
        }


    }


    public function GetVenueList(Request $request)
    {
        try {
            $venues = new Venue();
            $venues = Venue::all();

            /*$venues = DB::table('venues')
                ->join('venue_type', 'venues.venue_type_id', '=', 'venues_type.id')
               // ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select('venues.*', 'venue_type.type_name')
                ->get();*/
            return $venues;
            // print_r($venues);die();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function GetVenueData($id)
    {
        try {
            // $idv=$request->get('id');
            $venuedata = DB::table('user_venue')//table join gareko
            ->join('users', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
                ->join('user_info', 'user_info.user_id', '=', 'users.id')
                ->join('gallery', 'gallery.venue_id', '=', 'user_venue.venue_id')
                ->select('gallery.*', 'venues.*', 'users.*', 'user_info.*')
                ->where('users.id', '=', $id)
                ->get()->toArray();
            return $venuedata;


        } catch (\Exception $e) {
            throw $e;
        }

    }

    /* public function GetVenueDetails($id)
     {
        // return $id;
         $venues=new Venue();
         $venues=DB::table('venues')->where('venues.user_id','=',$id)->get();
         return $venues;

     }*/
    public function GetVenueData1($id)
    {
        try {
            /*$idv=$request->get('venue_id');*/
            $venuedata = DB::table('user_venue')//table join gareko
            ->join('users', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
                ->join('user_info', 'user_info.user_id', '=', 'users.id')
                ->join('gallery', 'gallery.venue_id', '=', 'user_venue.venue_id')
                ->select('gallery.*', 'venues.*', 'users.*', 'user_info.*')
                ->where('gallery.venue_id', '=', $id)
                ->get();


            return $venuedata;


        } catch (\Exception $e) {
            throw $e;
        }


    }


    public function GetInventory(Request $request)
    {
        try {

            $user_id = $request->user_id;
            /*return $user_id;*/

            /*$item_type=$request->item_type;*/
            $item_name = $request->item1;
            /*return $item_name;*/
            $userVenue = UserVenue::where('user_id', '=', $user_id)->first();
            /*return $userVenue;*/
            if (!$userVenue) {
                throw \Exception('no venue found');
            }
            $venuId = $userVenue->venue_id;
            /*return $venuId;*/
            $inventory1 = TblMenuItem::where('item_name', '=', $item_name)->first();
            if (!$inventory1) {

                $inventory1 = new TblMenuItem();//model ko User ko object create

            }


            $menu_id = $inventory1->id;
            /*return $menu_id;*/
            $inventory = VenueMenuItem::where('menu_item_id', '=', $menu_id)
                ->where('venue_id', '=', $venuId)
                ->first();
            /*$inventory=VenueMenuItem::all('venue_id','menu_item_id');*/
            /*return $inventory;*/


            if (!$inventory) {
                $inventory = new VenueMenuItem();

            }
            $inventory1->setAttribute('item_name', $request->get('item1'));
            $inventory1->item_type_id = $request->item_type_id;
            $inventory1->save();


//            $inventory->setAttribute('price_per', $request->get('price_per1'));
//            $inventory->setAttribute('venue_id', $userVenue->venue_id);
//            $inventory->setAttribute('menu_item_id',$inventory1->id);
            $inventory->price_per = $request->get('price_per1');
            $inventory->venue_id = $userVenue->venue_id;
            $inventory->menu_item_id = $inventory1->id;
            $inventory->save();


        } catch (\Exception $e) {
            throw $e;
        }


    }

    public function GetInventorylist($id)
    {
        try {
            $userVenue = UserVenue::where('user_id', '=', $id)->first();
            /*return $userVenue;*/
            $venuId = $userVenue->venue_id;
            /*return $venuId;*/
            $inventorydata = DB::table('tbl_menu_items')//table join gareko
            ->join('venue_menu_items', 'venue_menu_items.menu_item_id', '=', 'tbl_menu_items.id')
                ->join('venues', 'venues.id', '=', 'venue_menu_items.venue_id')
                ->join('tbl_item_type','tbl_item_type.id','=','tbl_menu_items.item_type_id')
                ->select('venues.id', 'tbl_menu_items.item_name', 'venue_menu_items.price_per','tbl_item_type.*')
                ->where('venues.id', '=', $venuId)
                ->get();
            return $inventorydata;


        } catch (\Exception $e) {
            throw $e;
        }

    }
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
                ->join('status', 'user_venue.status_id', '=', 'status.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name', 'venues.name')
                ->where('users.user_type_id', '=', 2)
                ->where('status.id', '=', 1)
                ->get();

            return $users;

        } catch (\Exception $e) {
            throw $e;
        }

    }
        public function DeleteVenue($id)
    {
       //return $id;
       // $venues=UserInfo::where('user_id','=',$id)->select('status_id')->first();
        /*$venues=DB::table('user_venue')
            ->join('venues','user_venue.status_id','=','venues.status_id')
            ->select('user_venue.status_id')
            ->where('venues.id','=','$id')
            ->first();*/

       $venues=UserVenue::where('user_id', '=', $id)->select('status_id')->first();
//return $venues;
        if ($venues->status_id == 1) {
            $venues = DB::table('user_venue')
                ->where('user_id', $id)
                //->where('venue_id','=','user_id')
                ->update(['status_id' => 2
                ]);
            return $venues;
        } else {
            $venues = DB::table('user_venue')
                ->where('user_id', $id)
                //->where('venue_id','=','user_id')
                ->update(['status_id' => 1
                ]);
            return $venues;
        }

    }

    public function VenueDeactive()
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
                ->join('status', 'user_venue.status_id', '=', 'status.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name', 'venues.name')
                ->where('users.user_type_id', '=', 2)
                ->where('status.id', '=', 2)
                ->get();

            return $users;

        } catch (\Exception $e) {
            throw $e;
        }
    }
    public function VenueActive($id){


        $venues=UserVenue::where('user_id','=',$id)->first();
        if($venues->status_id==2) {

            $venues = DB::table('user_venue')
                ->where('user_id', $id)
                ->update(['status_id' => 1
                ]);
        }
            $users = DB::table('users')
                ->join('user_info', 'users.id', '=', 'user_info.user_id')
                ->join('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->join('user_venue', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'user_venue.venue_id', '=', 'venues.id')
                ->join('status', 'user_venue.status_id', '=', 'status.id')
                ->select('users.*', 'user_info.first_name', 'user_info.last_name', 'user_types.type_name', 'venues.name')
                ->where('users.user_type_id', '=', 2)
                ->where('status.id', '=', 2)
                ->get();

            return $users;

        }



}







