<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class BookingForm extends Form
{
    public function buildForm()
    {
        $venue_id=$this->getData('venue_id');

        $this
            ->add('booking_date', 'date', [
                     'label'=>'Booking Date',
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-9 form-control field-input']
                ]
            )
            ->add('venue_id', 'hidden',['value'=>$venue_id])



            ->add('event','text', [
                    'label'=>'Event',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('booking_time','time', [
                    'label'=>'Booking Time',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )
            ->add('nop','text', [
                    'label'=>'No. of persons',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input']

                ]
            )

            ->add('next','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
