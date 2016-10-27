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
                'label'=>'Item 1',
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

            ->add('item2','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Item 2',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-5 form-control field-input'],


                ]
            )

            ->add('price_per2','number', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-2 form-control field-input'],
                ]
            )

            ->add('item3','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Item 3',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-5 form-control field-input'],


                ]
            )

            ->add('price_per3','number', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-2 form-control field-input'],
                ]
            )

            ->add('item4','text', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Item 4',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-5 form-control field-input'],


                ]
            )

            ->add('price_per4','number', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-2 form-control field-input'],
                ]
            )

            ->add('item5','text', [
                    'wrapper' => ['class' => 'form-group '],
                    'label'=>'Item 5',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-5 form-control field-input'],


                ]
            )

            ->add('price_per5','number', [
                    'wrapper' => ['class' => 'form-group'],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-2 form-control field-input'],
                ]
            )

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }
}
