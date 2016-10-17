<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class FeedbackForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('first_name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'First Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']
                ]
            )

            ->add('last_name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Last Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            )
            ->add('email','email', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Email Address',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required','email','unique:registered_users']

                ]
            )

            ->add('comment','textarea', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Comment',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input',],
                    'rules'=>['required']

            ]
            )

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }
}
