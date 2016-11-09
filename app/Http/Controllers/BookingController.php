<?php

namespace Venue\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;
use Venue\Models\Venue;

class BookingController extends BaseController
{
    public function Book(FormBuilder $formBuilder,Request $request)
    {
      //  $client = new Client(['base_uri'=> config('app.REST_API')]);
     //   print_r($request->getMethod());die();

           $id = $request->get('id')?$request->get('id'):$request->get('venue_id');


        /*print_r($id);die(); */
        if($request->getMethod()=='POST') {

            try {
                //print_r($request->booking_date);die();
                $book['date']=$request->get('booking_date');
                $book['time']=$request->get('booking_time');
                $book['event']=$request->get('event');
                $book['nop']=$request->get('nop');
                $book['venue_id']=$request->get('venue_id');
                session()->put('book',$book);


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
        $menutotal=session('menutotal');
        $vid=$book['venue_id'];
       /* print_r($vid);die();*/

     /*   $date=$book['date'];
        $time=$book['time'];
        $event=$book['event'];*/


        $venue=Venue::where('id','=',$vid)->first();
        $hall_charge=$venue->hall_charge;
        /*print_r($hall_charge);die();*/

        if($request->getMethod()=='POST') {
            try {
                print_r($book);
                print_r($menu);
                print_r($menutotal);die();


            }
                /*return session()->all();*/
               /* return redirect()->route('web.BookTotal');*/
             catch (\Exception $e) {
                print_r($e->getMessage());
                die();
            }
        }


     // $form = $formBuilder->Create('Venue\Forms\TotalBookingForm',['method'=>'POST','url' => route('web.BookTotal')]);


        $t1=$menutotal['grand_total1'];
        $t2=$menutotal['grand_total2'];
        $t3=$menutotal['grand_total3'];
        $t4=$menutotal['grand_total4'];
        $t5=$menutotal['grand_total5'];
            $total=$t1+$t2+$t3+$t4;

            $form = $formBuilder->Create(\Venue\Forms\TotalBookingForm::class, ['method' => 'POST', 'url' => route('web.BookTotal')],
                [
                     'grand_total' => $total,
                    'hall_charge' => $hall_charge,
                    'extra_charge'=>$t5


                ]);


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

                    $menutotal['grand_total1'] = $request->get('grand_total1');
                    $menutotal['grand_total2'] = $request->get('grand_total2');
                    $menutotal['grand_total3'] = $request->get('grand_total3');
                    $menutotal['grand_total4'] = $request->get('grand_total4');
                    $menutotal['grand_total5'] = $request->get('grand_total5');


                session()->put('menu',$menus);
                session()->put('menutotal',$menutotal);
                /*return session()->all();*/
                return redirect()->route('web.BookTotal');
            }
            catch(\Exception $e)
            {
                print_r($e->getMessage());die();
            }


        }

        $response = $client->request('GET','snacks/'.$vid);
        $data = $response->getBody()->getContents();
       /* print_r($data);die();*/
        $snacks =  \GuzzleHttp\json_decode($data);

        $response1 = $client->request('GET','dinner/'.$vid);
        $data1 = $response1->getBody()->getContents();
        /* print_r($data);die();*/
        $dinner =  \GuzzleHttp\json_decode($data1);

        $response2 = $client->request('GET','drinks/'.$vid);
        $data2 = $response2->getBody()->getContents();
        /* print_r($data);die();*/
        $drinks =  \GuzzleHttp\json_decode($data2);

        $response3 = $client->request('GET','extra/'.$vid);
        $data3 = $response3->getBody()->getContents();
        /* print_r($data);die();*/
        $extra =  \GuzzleHttp\json_decode($data3);

        $response4 = $client->request('GET','dessert/'.$vid);
        $data4 = $response4->getBody()->getContents();
        /* print_r($data);die();*/
        $dessert =  \GuzzleHttp\json_decode($data4);


      /*  $book['item_name']=$request->get('item_name');
        session()->put('book',$book);*/
        return view('Layout.MenuSelection',compact('snacks','dinner','drinks','extra','dessert'));
    }

    public function BookPreview(){
        $book=session('book');
        $menu=session('menu');
        /*print_r($book);
        print_r($menu);die();*/
        return view('Layout.BookPreview',compact('book','menu'));
    }
}
