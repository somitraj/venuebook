<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class AddressForm extends Form
{
    public function buildForm()
    {
      $this
                     ->add('Country', 'select', [
                    'choices' => ['np' => 'Nepal','en' => 'English', 'fr' => 'France'],
                   /*  'selected' => 'en',*/
                     'empty_value' => '=== Select Country ===',
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'attr' =>['class' => 'col-md-9 form-control field-input']
            ]
            )



            ->add('Province','select', [
                    'choices' => ['en' => 'English', 'fr' => 'French'],
                    /*'selected' => 'en',*/
                    'empty_value' => '=== Select Province ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Zones','select', [
                    'choices' => ['bg' => 'Bagmati', 'Nr' => 'Narayani'],
                 /*   'selected' => 'bg',*/
                    'empty_value' => '=== Select Zone ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('District','select', [
                    'choices' => ['ktm' => 'Kathmandu', 'ptn' => 'Patan'],
                    /*'selected' => 'Ktm',*/
                    'empty_value' => '=== Select District ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Locality','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )



            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
