<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class TotalBookingForm extends Form
{
    public function buildForm()
    {
      $this
                     ->add('Hall Charge', 'text', [
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'attr' =>['class' => 'col-md-9 form-control field-input']
            ]
            )



            ->add('Menu Charge','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Extra','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
          ->add('I agree to the terms and conditions mentioned above','checkbox')
            ->add('Book','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
