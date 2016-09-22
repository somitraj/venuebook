<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class RegistrationForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('First Name','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' =>['class' => 'col-md-9 form-control field-input']
            ]
            )

            ->add('Last Name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-9 form-control field-input']
                ]
            )

            ->add('Password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Confirm Password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Email Address','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Confirm Email','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )



            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}