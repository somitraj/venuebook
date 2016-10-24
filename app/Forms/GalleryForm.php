<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class GalleryForm extends Form
{
    public function buildForm()
    { $this
        ->add('cover','file', [
                'wrapper' => ['class' => 'form-group row'],
                'label'=>'Cover Image',
                'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

            ]
        )

        ->add('image1','file', [
                'wrapper' => ['class' => 'form-group row'],
                'label'=>'Image1',
                'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

            ]
        )

        ->add('image2','file', [
                'wrapper' => ['class' => 'form-group row'],
                'label'=>'Image2',
                'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

            ]
        )
        ->add('image3','file', [
                'wrapper' => ['class' => 'form-group row'],
                'label'=>'Image3',
                'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

            ]
        )
        ->add('image4','file', [
                'wrapper' => ['class' => 'form-group row'],
                'label'=>'Image4',
                'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

            ]
        )
        ->add('venue_id', 'hidden', [
            ]
        )
        ->add('auth','hidden',[

            ]
        )

        ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}


