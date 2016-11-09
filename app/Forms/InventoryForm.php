<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class InventoryForm extends Form
{
    public function buildForm()
    {
        $item_types=$this->getData('item_type');
        /*print_r($item_types);die();*/
        $itemOption=[];
        foreach($item_types->tbl_item_types as $item)
        {
            $itemOption[$item->id]=$item->item_type;
        }

        $this
            ->add('item1','text', [
                'wrapper' => ['class' => 'form-group'],
                'label'=>'Item name',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                'attr' => ['class' => 'col-md-2 form-control field-input'],


                ]
            )

            ->add('price_per1','number', [
                'wrapper' => ['class' => 'form-group '],
                    'label'=>'Price Per',
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' => ['class' => 'col-md-2 form-control field-input'],
                ]
            )
            ->add('item_type', 'select', [
                    'choices' => $itemOption,
                    /*  'selected' => 'en',*/
                    'empty_value' => '=Select= ',
                    'wrapper' =>['class' => 'form-group row '],
                    'label_attr'=>['class'=>'col-md-2 control-label'],
                    'attr' =>['class' => 'col-md-2 form-control field-input']
                ]
            )



            ->add('add','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }
}
