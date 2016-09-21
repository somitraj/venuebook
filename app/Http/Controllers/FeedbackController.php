<?php

namespace Venue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;

class FeedbackController extends BaseController
{
    public function Feedback(FormBuilder $formBuilder)
    {
        $form = $formBuilder->Create('Venue\Forms\FeedbackForm',['method'=>'POST','url' => route('web.Feedback')]);
        return view('Layout.Feedback', compact('form'));
       // print_r($form);
        die();


}
}
