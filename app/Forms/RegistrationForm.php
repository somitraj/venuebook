<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class RegistrationForm extends Form
{
    public function buildForm()
    {
       // print_r($this->getData('country'));die();
        $this
            ->add('First Name','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' =>['class' => 'col-md-8 form-control field-input']
            ]
            )

            ->add('Last Name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            )

            ->add('Password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required','min:5']

                ]
            )
            ->add('Confirm Password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Email Address','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Confirm Email','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )

            ->compose(\Venue\Forms\AddressForm::class,['country'=>$this->getData('country'),'province'=>$this->getData('province'),'zone'=>$this->getData('zone'),'district'=>$this->getData('district')])

            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
