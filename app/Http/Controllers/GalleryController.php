<?php

namespace Venue\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use Venue\Http\Requests;
use GuzzleHttp\Client;

use Venue\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function Gallery(FormBuilder $formBuilder,Request $request)
    {
        $client = new Client(['base_uri'=> config('app.REST_API')]);
        if($request->getMethod()=='POST') {

            /*print_r($request->get('email')); die();*/
            try {
                $pathToFile='gallery/';
                /*return $pathToFile;*/
                $cover='null';
                $image1='null';
                $image2='null';
                $image3='null';
                $image4='null';
                $uploadfile = $pathToFile . basename($_FILES['cover']['name']);
                if (move_uploaded_file($_FILES['cover']['tmp_name'], $uploadfile)) {
                    $cover='gallery/'.basename($_FILES['cover']['name']);
                }
                $uploadfile1 = $pathToFile . basename($_FILES['image1']['name']);
                if (move_uploaded_file($_FILES['image1']['tmp_name'], $uploadfile1)) {
                    $image1='gallery/'.basename($_FILES['image1']['name']);
                }
                $uploadfile2 = $pathToFile . basename($_FILES['image2']['name']);
                if (move_uploaded_file($_FILES['image2']['tmp_name'], $uploadfile2)) {
                    $image2='gallery/'.basename($_FILES['image2']['name']);
                }
                $uploadfile3 = $pathToFile . basename($_FILES['image3']['name']);
                if (move_uploaded_file($_FILES['image3']['tmp_name'], $uploadfile3)) {
                    $image3='gallery/'.basename($_FILES['image3']['name']);
                }
                $uploadfile4 = $pathToFile . basename($_FILES['image4']['name']);
                if (move_uploaded_file($_FILES['image4']['tmp_name'], $uploadfile4)) {
                    $image4='gallery/'.basename($_FILES['image4']['name']);
                }

                /*$client = new Client(['base_uri'=> config('app.REST_API')]);*/
                /*print_r(\Illuminate\Support\Facades\Auth::user()->id);die(); */
//                $response1 = $client->request('POST','venuedata',[
//                    'form_params'=>[
//                        'auth'=>\Illuminate\Support\Facades\Auth::user()->id
//                    ]
//                ]);
//                $data = $response1->getBody()->getContents();
//                $venuedata =  \GuzzleHttp\json_decode($data);
                /*print_r($venuedata[0]->id);die();*/


                $response = $client->request('POST', 'gallery', [
                    'form_params' => [
                        'cover' => $cover,
                        'image1' => $image1,
                        'image2' => $image2,
                        'image3' => $image3,
                        'image4' => $image4,
                        'user_id'=>Auth::user()->id,

                                            ]
                ]);
               /* print_r($response->getBody()->getContents());
                die();*/
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }

            $request->session()->flash('alert-success', 'Gallery Updated!');
        }

        $id=Auth::user()->id;
        /*print_r($id);die();*/
        $response1 = $client->request('POST', 'gallerydisplay/'.$id);
        $data1 = $response1->getBody()->getContents();
        $gallerydata = \GuzzleHttp\json_decode($data1);
        /*print_r($gallerydata);die();*/
         /*print_r($response1->getBody()->getContents());
                die();*/




        $form = $formBuilder->Create('Venue\Forms\GalleryForm',['method'=>'POST','url' => route('manager.gallery')]);


        return view('Layout.Gallery', compact('form','gallerydata'));


    }


}
