<?php

namespace Venue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;

class BookingController extends BaseController
{
    public function Book(FormBuilder $formBuilder)
    {
        $form = $formBuilder->Create('Venue\Forms\BookingForm',['method'=>'POST','url' => route('web.Book')]);
        return view('Layout.Book', compact('form'));
       // print_r($form);
        /*die();*/


}
    public function BookTotal(FormBuilder $formBuilder)
    {
        $form = $formBuilder->Create('Venue\Forms\TotalBookingForm',['method'=>'POST','url' => route('web.BookTotal')]);
        return view('Layout.BookTotal', compact('form'));
        // print_r($form);
        die();


    }
}
