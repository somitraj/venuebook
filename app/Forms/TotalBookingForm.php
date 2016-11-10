<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class TotalBookingForm extends Form
{
    public function buildForm()
    {

        $menutotal = $this->getData('grand_total');
        $hall_charge = $this->getData('hall_charge');
        $extra_charge= $this->getData('extra_charge');
        $total=$menutotal+$hall_charge+$extra_charge;


      $this
                     ->add('Hall Charge', 'text', [
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'attr' =>['class' => 'col-md-9 form-control field-input','disabled'],
                             'value'=>'Rs '.$hall_charge
            ]
            )



            ->add('Menu Charge','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input','disabled'],
                    'value'=>'Rs '.$menutotal

                ]
            )
            ->add('extra','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Extra Item Charge',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-9 form-control field-input','disabled'],
                    'value'=>'Rs '.$extra_charge

                ]
            )
          ->add('total','text', [
                  'wrapper' => ['class' => 'form-group row'],
                  'label'=>'Grand Total',
                  'label_attr'=>['class'=>'col-md-3 control-label'],
                  'attr' => ['class' => 'col-md-9 form-control field-input','disabled'],
                  'value'=>'Rs '.$total

              ]
          )
          ->add('I have read and accepted the Terms of use and Privacy Policy','checkbox',[
              'rules'=>['required']
          ])

            ->add('Book','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
