<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class AddressForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr' =>['class' => 'col-md-8 form-control field-input']
            ]
            )



            ->add('Password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-4 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Confirm Password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-4 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Email Address','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-4 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Confirm Email','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-4 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )



            ->add('submit','submit');
    }
}
