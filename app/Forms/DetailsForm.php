<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class DetailsForm extends Form
{
    public function buildForm()
    {
       // print_r($this->getData('country'));die();
        $firstname = $this->getData('first_name');
        $lastname = $this->getData('last_name');
        $username = $this->getData('username');
        $dob = $this->getData('dob');
        $nationality_id =$this->getData('nationality_id');
        $phone_no=$this->getData('phone_no');
        $mobile_no =$this->getData('mobile_no');
        $email =$this->getData('email');
        $password=$this->getData('password');
       /* $user_type_id=$this->getData('user_type');
        $country_id = $this->getData('Country');
        $province_id=$this->getData('Province');
        $zone_id = $this->getData('Zones');
        $district_id = $this->getData('District');
        $locality= $this->getData('Locality');
        $profile_image =$this->getData('profile_image');
        $identity_image = $this->getData('identity_image');*/

        $this
            ->add('first_name','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label'=>'First Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' =>['class' => 'col-md-8 form-control field-input','disabled'],
                    'rules'=>['required'],
                    'value'=>$firstname
            ]
            )

            ->add('last_name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Last Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input','dusabled'],
                    'value'=>$lastname,
                ]
            )
            ->add('username','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Username',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input','disabled'],
                    'value'=>$username,
                ]
            )
            ->add('dob','date',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Date Of Birth',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input','disabled'],
                    'value'=>$dob
                ]
            )

            ->add('password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'rules'=>['required','min:4','same:confirm_password'],
                    'value'=>$password

                ]
            )
            /*->add('confirm_password','password', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Confirm Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'rules'=>['required','min:4'],


                ]
            )
            ->add('email','email', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Email Address',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'rules'=>['required','email','unique:registered_users'],
                    'value'=>$email

                ]
            )

            ->add('cemail','email', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Confirm Email',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'rules'=>['required','email','unique:registered_users']

                ]
            )

            ->add('nationality_id','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Nationality ID',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'rules'=>['required'],
                    'value'=>$nationality_id

                ]
            )*/

            ->add('phone_no','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Phone No.',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'value'=>$phone_no

                ]
            )

            ->add('mobile_no','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Mobile No. ',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','disabled'],
                    'value'=>$mobile_no

                ]
            )
            /* ->add('user_type', 'hidden', [
                        'label'=>'User Type',
                        'default_value' => 3,*/
                        /*'selected'=>$usertypeOption[3],*/
                        /*  'selected' => 'client',*/
                        /*'empty_value' => 'client',*/
                     /*   'wrapper' =>['class' => 'form-group row'],
                        'label_attr'=>['class'=>'col-md-3 control-label'],
                        'attr' =>['class' => 'col-md-8 form-control field-input'],
                     'value'=>$user_type_id


                    ]
                )

        /*    ->compose(\Venue\Forms\AddressForm::class,['country'=>$this->getData('country'),'province'=>$this->getData('province'),'zone'=>$this->getData('zone'),'district'=>$this->getData('district'),])*/

            /*->add('profile_image','file', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Profile Image',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg'],
                    'value'=>$profile_image

                ]
            )

            ->add('identity_image','file', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Identity Image',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input','accept'=>'.jpeg,.png,.jpg'],
                    'value'=>$identity_image

                ]
            )*/
            ->add('update','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);


        ;
    }
}
