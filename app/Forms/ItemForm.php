<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class ItemForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('item_name','text', [
                'wrapper' => ['class' => 'form-group'],
                    'label'=>'Item Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']

                ]
            )


         ->add('price','text', [
            'wrapper' => ['class' => 'form-group'],
            'label'=>'Price',
                 'label_attr'=>['class'=>'col-md-3 control-label'],
            'attr' => ['class' => 'form-control field-input'],
            'rules'=>['required']


        ]
    )
            ->add('price_per','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required']


                ]
            )

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']])
            ->add('reset','reset',['attr' =>['class'=> 'btn btn-primary btn-block']]);

    }
}
