<?php

namespace Venue\Http\Controllers\api;

use Venue\Models\Gallery;
use Illuminate\Http\Request;

use Venue\Http\Requests;
use Venue\Http\Controllers\Controller;
/*use Venue\Models\Gallery;*/

use Illuminate\Support\Facades\DB;



class GalleryController extends Controller
{
    public function Gallery(Request $request)
    {
        try {
            $gallery = new Gallery();  //model ko User ko object create
            $gallery->setAttribute('cover', $request->get('cover'));   //setting data from form to table column
            $gallery->setAttribute('image1', $request->get('image1'));
            $gallery->setAttribute('image2', $request->get('image2'));
            $gallery->setAttribute('image3', $request->get('image3'));
            $gallery->setAttribute('image4', $request->get('image4'));
            /*$user->user_type_id=$request->user_type_id;*/
            // return $user;
            /*$user->setAttribute('user_id',$user->getAttribute('id'));*/
            $gallery->save();
        }catch(\Exception $e){
            throw $e;
        }

}
}
