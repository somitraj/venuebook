<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class VenueForm extends Form
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
                     'rules'=>['required'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],

                ]
            )
            ->add('name','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Venue Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']
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
            ->add('user_type', 'hidden', [
                    'label'=>'User Type',
                    'default_value' => 2,
                    /*'selected'=>$usertypeOption[3],*/
                    /*  'selected' => 'client',*/
                    /*'empty_value' => 'client',*/
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],


                ]
            )
           ->compose(\Venue\Forms\VenueTypeForm::class,['venue_type'=>$this->getData('venue_type')])

           /* ->add('type_name','select', [*/
                  /*  'choices' => $type_nameOption,*/
                /*'selected' => 'en',
                    'empty_value' => '=== Select Province ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']*/
                /*]*/
            /*)*/
           ->add('profile_image','file', [
                   'wrapper' => ['class' => 'form-group row'],
                   'label'=>'Profile Image',
                   'label_attr'=>['class'=>'col-md-3 control-label'],
                   'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg']

               ]
           )

            ->add('image','file',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Logo',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg'],
                    'rules'=>['required']
                ]
            )
            ->add('established_date','date',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Established date',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            )

            ->add('phone_no','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Phone No.',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']

                ]
            )

            ->add('phone_no_2','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Phone No.2',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )

            ->add('space_area','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Space Area',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']

                ]
            )
            ->add('hall_charge','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Hall Charge',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']
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

            ->add('person_capacity','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Person Capacity',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                         'rules'=>['required']
                ]
            )
            ->compose(\Venue\Forms\AddressForm::class,['country'=>$this->getData('country'),'province'=>$this->getData('province'),'zone'=>$this->getData('zone'),'district'=>$this->getData('district'),])







            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ->add('reset','reset',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ;
    }
}
