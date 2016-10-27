<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class inventoryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('Item1','text', [
                'wrapper' => ['class' => 'form-group'],
                'label'=>'Username',
                'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('Item2','password', [
                'wrapper' => ['class' => 'form-group'],
                'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required','min:4']


                ]
            )

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']])
    }

}
