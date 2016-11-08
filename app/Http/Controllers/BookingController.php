<?php

namespace Venue\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;

class BookingController extends BaseController
{
    public function Book(FormBuilder $formBuilder,Request $request)
    {
      //  $client = new Client(['base_uri'=> config('app.REST_API')]);
     //   print_r($request->getMethod());die();

           $id = $request->get('id')?$request->get('id'):$request->get('venue_id');


        /*print_r($id);die(); */
        if($request->getMethod()=='POST') { //activates register button

            try {
                //print_r($request->booking_date);die();
                $book['date']=$request->get('booking_date');
                $book['time']=$request->get('booking_time');
                $book['event']=$request->get('event');
                $book['venue_id']=$request->get('venue_id');
                session()->put('book',$book);


                /*$b=$request->get('booking_date');
                print_r($b);die();*/
//                $response = $client->request('POST', 'book1', [
//                    'form_params' => [
//                        'booking_date' =>  $request->get('booking_date'),
//                        'event' =>  $request->get('event'),
//                        'booking_time' => $request->get('booking_time'),
//                        'venue_id' => $id
//
//                    ]
//                ]);
                /*print_r($response->getBody()->getContents());
                die();*/
                return redirect()->route('web.MenuSelect');
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }


        }
        $form = $formBuilder->Create('Venue\Forms\BookingForm',['method'=>'POST','url' => route('web.Book')],['venue_id'=>$id]);
        return view('Layout.Book', compact('form'));
       // print_r($form);
        /*die();*/


}
    public function BookTotal(FormBuilder $formBuilder,Request $request)
    {
        $book=session('book');
        $menu=session('menu');
        /*print_r($book['date']);
        print_r($menu);die();*/
        $date=$book['date'];
        $time=$book['time'];
        $event=$book['event'];




        if($request->getMethod()=='POST') {
            try {
                /*print_r($book['date']);
                print_r($menu);die();*/

                foreach ($menu as $m) {

                    /*print_r(count($me));die();*/

                        $item = $m['item_name'];
                        $quantity = $m['quantity'];
                        $total = $m['total'];
                        print_r($m);
                        die();



                }
            }
                /*return session()->all();*/
               /* return redirect()->route('web.BookTotal');*/
             catch (\Exception $e) {
                print_r($e->getMessage());
                die();
            }
        }


        $form = $formBuilder->Create('Venue\Forms\TotalBookingForm',['method'=>'POST','url' => route('web.BookTotal')]);
        return view('Layout.BookTotal', compact('form'));
        // print_r($form); die();



    }
    public  function  MenuSelect(Request $request){
        /*$id = $_GET['id'];
        print_r($id);die(); */
        $book=session('book');
        $vid=$book['venue_id']; //session bata venue_id leko
        /*print_r($vid);die();*/
      // print_r(session('book'));die();
        $client = new Client(['base_uri' => config('app.REST_API')]);
        if($request->getMethod()=='POST') {
            try {
                $menus=array();
                foreach($request->get('menuselect') as $key =>$val)
                {
                    $menu['item_name']=$request->get('item_name')[$key];
                    $menu['quantity']=$request->get('quantity')[$key];
                    $menu['price_per']=$request->get('price_per')[$key];
                    $menu['total']=$request->get('total')[$key];
                    $menus[]=$menu;
                }


                session()->put('menu',$menus);
                /*return session()->all();*/
                return redirect()->route('web.BookTotal');
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }


        }

        $response = $client->request('GET','menuselect/'.$vid);
        $data = $response->getBody()->getContents();
       /* print_r($data);die();*/
        $menudata =  \GuzzleHttp\json_decode($data);


      /*  $book['item_name']=$request->get('item_name');
        session()->put('book',$book);*/
        return view('Layout.MenuSelection',compact('menudata'));
    }
}
