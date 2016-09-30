<?php

namespace Venue\Http\Controllers;

use Illuminate\Http\Request;

use Venue\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;

class ItemController extends Controller
{
    public function create(/*FormBuilder $formBuilder*/)
    {
       /* $form=$formBuilder->create(\Venue\Forms\user::class);
        return view('VenueMaster', ['form'=>$form]);*/
       /* return view('Layout.Home');*/
         return view('Layout.Home');
    }
}
