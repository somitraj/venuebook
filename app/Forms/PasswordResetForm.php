<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class PasswordResetForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('old_password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Old Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'form-control field-input','placeholder'=>'enter old password'],
                    'rules'=>['required','min:4']

                ]
            )
            ->add('new_password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'New Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'form-control field-input','placeholder'=>'enter new password'],
                    'rules'=>['required','min:4']

                ]
            )
            ->add('confirm_new_password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Confirm New Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'form-control field-input','placeholder'=>'retype new password'],
                    'rules'=>['required','min:4']

                ]

            )
            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ->add('reset','reset',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}