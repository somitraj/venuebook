<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LoginController extends BaseController
{
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(App\Forms\LoginForm::class, [
{

}
}
