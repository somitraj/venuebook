<?php

namespace Venue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;

class UserController extends BaseController
{
    public function login(FormBuilder $formBuilder)
    {
        $form = $formBuilder->Create('Venue\Forms\LoginForm',['method'=>'POST','url' => route('web.login')]);
        return view('Layout.Login', compact('form'));
       // print_r($form);
        die();


}
}
