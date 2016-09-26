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
        $form = $formBuilder->Create('Venue\Forms\LoginForm', ['method' => 'POST', 'url' => route('web.login')]);
        return view('Layout.Login', compact('form'));
        die();
    }

        public function Register(FormBuilder $formBuilder)
    {

        $form = $formBuilder->Create('Venue\Forms\RegistrationForm',['method'=>'POST','url' => route('web.Register')]);
        return view('Layout.Register', compact('form'));
        die();
}
    public function Address(FormBuilder $formBuilder)
    {

        $form = $formBuilder->Create('Venue\Forms\AddressForm',['method'=>'POST','url' => route('web.Address')]);
        return view('Layout.Address', compact('form'));
        die();
    }
    public function Contact()
    {
        return view('Layout.Contact', compact('form'));
    }
    public function Terms()
    {
        return view('Layout.Terms', compact('form'));
    }
    public function Privacy()
    {
        return view('Layout.Privacy', compact('form'));
    }
    public function Manager()
    {
        return view('Layout.Manager', compact('form'));
    }
    public function Admin()
    {
        return view('Layout.Admin', compact('form'));
    }

}
