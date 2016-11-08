<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class TotalBookingForm extends Form
{
    public function buildForm()
    {

        $menutotal = $this->getData('grand_total');
        $hall_charge = $this->getData('hall_charge');
        $default=0;
        $total=$menutotal+$hall_charge+$default;


      $this
                     ->add('Hall Charge', 'text', [
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'attr' =>['class' => 'col-md-9 form-control field-input'],
                             'value'=>'Rs '.$hall_charge
            ]
            )



            ->add('Menu Charge','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input'],
                    'value'=>'Rs '.$menutotal

                ]
            )
            ->add('Extra','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input'],
                    'value'=>'Rs '.$default

                ]
            )
          ->add('total','text', [
                  'wrapper' => ['class' => 'form-group row'],
                  'label'=>'Total',
                  'label_attr'=>['class'=>'col-md-3 control-label'],
                  'attr' => ['class' => 'col-md-9 form-control field-input'],
                  'value'=>'Rs '.$total

              ]
          )
          ->add('I have read and accepted the Terms of use and Privacy Policy','checkbox',[
              'rules'=>['required']
          ])

          ->add('preview','button',['label'=>'Preview Your Booking','attr' =>['class'=> 'btn btn-primary btn-block'],])

            ->add('Book','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
