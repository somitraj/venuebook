<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class RegistrationForm extends Form
{
    public function buildForm()
    {
       // print_r($this->getData('country'));die();
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
            ->add('username','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Username',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            )
            ->add('dob','date',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Date Of Birth',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            )

            ->add('password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required','min:4','same:confirm_password']

                ]
            )
            ->add('confirm_password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Confirm Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required','min:4']

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

            ->add('cemail','email', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Confirm Email',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required','email','unique:registered_users']

                ]
            )

            ->add('nationality_id','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Nationality ID',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('phone_no','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Phone No.',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )

            ->add('mobile_no','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Mobile No. ',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
             ->add('user_type', 'hidden', [
                        'label'=>'User Type',
                        'default_value' => 3,
                        /*'selected'=>$usertypeOption[3],*/
                        /*  'selected' => 'client',*/
                        /*'empty_value' => 'client',*/
                        'wrapper' =>['class' => 'form-group row'],
                        'label_attr'=>['class'=>'col-md-3 control-label'],
                        'attr' =>['class' => 'col-md-8 form-control field-input'],


                    ]
                )

            ->compose(\Venue\Forms\AddressForm::class,['country'=>$this->getData('country'),'province'=>$this->getData('province'),'zone'=>$this->getData('zone'),'district'=>$this->getData('district'),])

            ->add('profile_image','file', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Profile Image',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

                ]
            )

            ->add('identity_image','file', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Identity Image',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

                ]
            )
            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ->add('reset','reset',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ;
    }
}
