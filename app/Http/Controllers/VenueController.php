<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;

class VenueController extends Controller
{
    public function create(FormBuilder $formBuilder)
    {
        $form=$formBuilder->create(\App\Forms\user::class);
        return view('VenueMaster', ['form'=>$form]);
    }
}
