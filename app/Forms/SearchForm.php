<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class SearchForm extends Form
{
    public function buildForm()
    {



            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
