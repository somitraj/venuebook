<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class FeedbackForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('First Name','text', [
                'wrapper' => ['class' => 'form-group row'],
                'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' =>'col-md-8 form-control field-input']

                ]
            )

            ->add('Last Name','text', [
                'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input']

                 ]
            )
            ->add('E-mail','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )

            ->add('Comment','textarea', [
            'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' => ['class' => 'col-md-8 form-control field-input',],

            ]
            )

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }
}
