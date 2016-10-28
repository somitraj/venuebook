<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class InventoryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('item1','text', [
                'wrapper' => ['class' => 'form-group'],
                'label'=>'Item name',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                'attr' => ['class' => 'col-md-5 form-control field-input'],


                ]
            )

            ->add('price_per1','number', [
                'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-2 form-control field-input'],
                ]
            )



            ->add('add','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }
}
