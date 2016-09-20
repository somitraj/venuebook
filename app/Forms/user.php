<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class user extends Form
{
    public function buildForm()
    {
        $this->add('firstname','text',[
            'label'=>'Name',
            'labelAttr'=>['class'=>'form-control'],
            'attr'=>['class'=>'col-md-4','id'=>'1']
        ]);
    }
}
