<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class BookingForm extends Form
{
    public function buildForm()
    {
      $this
                     ->add('Booking Date', 'date', [
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'attr' =>['class' => 'col-md-9 form-control field-input']
            ]
            )



            ->add('Event','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('Booking time','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )

            ->add('Next','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
