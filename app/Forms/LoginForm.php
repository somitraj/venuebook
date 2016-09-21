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
                'attr' => ['class' => 'form-control field-input'],
                'label_attr' =>['class' => 'col-md-4 control-label']

                ]
            )

            ->add('password :','password', [
                'wrapper' => ['class' => 'form-group'],
                'attr' => ['class' => 'form-control field-input'],
                    'label_attr' =>['class' => 'col-md-4 control-label']

                 ]
            )

            ->add('remember me','checkbox')

            ->add('submit','submit',[ 'attr' => ['class' => 'btn btn-primary btn-block'] ])

            ->add('Forgot Password?','submit',[ 'attr' => ['class' => 'btn btn-primary btn-block']

            ]);
    }
}
