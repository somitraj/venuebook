<?php

namespace Venue\Http\Controllers\api;

use Venue\Models\Gallery;
use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
/*use Venue\Models\Gallery;*/

use Illuminate\Support\Facades\DB;
use Venue\Models\UserVenue;


/**
 * Class GalleryController
 * @package Venue\Http\Controllers\api
 */
class GalleryController extends Controller
{
    public function Gallery(Request $request)
    {
        try {
            $user_id=$request->user_id;
            $userVenue = UserVenue::where('user_id', '=', $user_id)->first();
            if(!$userVenue) {
                throw \Exception('no venue found');
            }
            $venuId=$userVenue->venue_id;
            $gallery=Gallery::where('venue_id','=',$venuId)->first();
           // return $gallery;
            if(!$gallery)
            {
                $gallery = new Gallery();  //model ko User ko object create

            }
            $gallery->setAttribute('cover', $request->get('cover'));   //setting data from form to table column
            $gallery->setAttribute('image1', $request->get('image1'));
            $gallery->setAttribute('image2', $request->get('image2'));
            $gallery->setAttribute('image3', $request->get('image3'));
            $gallery->setAttribute('image4', $request->get('image4'));
            $gallery->setAttribute('venue_id', $userVenue->venue_id);



                $gallery->save();

//            }
//            else{
//
//                $gallery=new Gallery();
//                where('venue_id','=','$userVenue->venue_id')
//                    ->update(['cover'=> $request->get('cover'),
//                       'image1'=> $request->get('image1'),
//                        'image2'=> $request->get('image2'),
//                        'image3'=> $request->get('image3'),
//                        'image4'=> $request->get('image4'),
//                        'venue_id'=> $userVenue->venue_id
//
//                ]);
//                $gallery->save();
//
//            }
        }catch(\Exception $e){
            throw $e;
        }

}
    public function GalleryDisplay($id)
    {
        try {
            /*return $id;*/
            /*$user_id=$request->user_id;*/
            /*return $user_id;*/
            $userVenue = UserVenue::where('user_id', '=', $id)->first();

            $venuId=$userVenue->venue_id;
            /*return $venuId;*/
            $gallerydata=Gallery::where('venue_id','=',$venuId)->first();

           return $gallerydata;


        }catch(\Exception $e){
            throw $e;
        }

    }
}
