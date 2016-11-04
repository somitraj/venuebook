<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('username','text', [
                'wrapper' => ['class' => 'form-group'],
                'label'=>'Username',
                'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required'],
                    'errors' => ['class' => 'text-danger col-md-offset-4']

                ]
            )

            ->add('password','password', [
                'wrapper' => ['class' => 'form-group'],
                'attr' => ['class' => 'form-control field-input'],
                    'rules'=>['required','min:4'],
                    'errors' => ['class' => 'text-danger col-md-offset-4']

                ]
            )

            ->add('remember me','checkbox')

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']])
            ->add('Forgot Password?','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }

}
