<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email','text', [
                'wrapper' => ['class' => 'form-group row'],
                   /* 'label_attr'=>['class'=>'col-md-4 control-label'],*/
                'attr' => ['class' => '/*col-md-8*/ form-control field-input']

                ]
            )

            ->add('password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                   /* 'label_attr'=>['class'=>'col-md-4 control-label'],*/
                'attr' => ['class' => '/*col-md-8*/ form-control field-input']

                 ]
            )

            ->add('remember me','checkbox')

            ->add('submit','submit');
    }
}
