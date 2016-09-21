<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email','text', [
                'wrapper' => ['class' => 'form-group'],
                'attr' => ['class' => 'form-control field-input']

                ]
            )

            ->add('password','password', [
                'wrapper' => ['class' => 'form-group'],
                'attr' => ['class' => 'form-control field-input']

                 ]
            )

            ->add('remember me','checkbox')

            ->add('submit','submit',['attr'=>['class'=>'btn btn-primary btn-block']])
            ->add('Forgot Password?','submit',['attr'=>['class'=>'btn btn-primary btn-block']]);
    }
}
