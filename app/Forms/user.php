<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class user extends Form
{
    public function buildForm()
    {
        $this->add('firstname','text',[
            'label'=>'Name',
            'label_attr'=>['class'=>'col-md-2 label-control'],
            'attr'=>['class'=>'form-control','id'=>'1'],
        ]);

    }
}
