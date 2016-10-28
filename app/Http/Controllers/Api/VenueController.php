<?php

namespace Venue\Http\Controllers\Api;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Venue\Models\User;
/*use Venue\Http\Requests;*/
use Venue\Http\Controllers\Controller;
use Venue\Models\UserInfo;
use Venue\Models\UserVenue;
use Venue\Models\Venue;
use Venue\Models\VenueType;



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
            $venues->district_id = $request->district_id;
            $venues->established_date = $request->established_date;
            $venues->image = $request->image;
            $venues->image = $request->image;
            $venues->setAttribute('country_id', $userinfo->country_id);
            $venues->setAttribute('locality', $request->get('locality'));
            $venues->venue_type_id = $request->venue_type_id;
            $venues->save();
            //$venues->userVenues();

            $uservenue=new UserVenue();
            $uservenue->user_id=$user->id;
            $uservenue->venue_id=$venues->id;
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
            $venuedata =DB::table('user_venue')  //table join gareko
                ->join('users', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
                ->join('user_info', 'user_info.user_id', '=', 'users.id')
                ->join('gallery', 'gallery.venue_id', '=', 'user_venue.venue_id')
                ->select('gallery.*','venues.*','users.*','user_info.*')
                ->where('users.id','=',$id)
                ->get();
               return $venuedata;


            }
            catch(\Exception $e){
                throw $e;
            }




    }


    public function GetVenueData1($id)
    {
        try {
            /*$idv=$request->get('venue_id');*/
            $venuedata =DB::table('user_venue')  //table join gareko
            ->join('users', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
                ->join('user_info', 'user_info.user_id', '=', 'users.id')
                ->join('gallery', 'gallery.venue_id', '=', 'user_venue.venue_id')
                ->select('gallery.*','venues.*','users.*','user_info.*')
                ->where('gallery.venue_id','=',$id)
                ->get();


            return $venuedata;


        }
        catch(\Exception $e){
            throw $e;
        }




    }

    /*public function GetVenueData2($id)
    {
        try {

            $venuedata =DB::table('user_venue')  //table join gareko
            ->join('users', 'users.id', '=', 'user_venue.user_id')
                ->join('venues', 'venues.id', '=', 'user_venue.venue_id')
                ->join('user_info', 'user_info.user_id', '=', 'users.id')
                ->join('gallery', 'gallery.venue_id', '=', 'user_venue.venue_id')
                ->select('gallery.*','venues.*','users.*','user_info.*')
                ->where('gallery.venue_id','=',$id)
                ->get();


            return $venuedata;


        }
        catch(\Exception $e){
            throw $e;
        }




    }*/



}




