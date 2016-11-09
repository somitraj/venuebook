<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class VenueDetailsForm extends Form
{
    public function buildForm()
    {
       // print_r($this->getData('country'));die();
        $firstname = $this->getData('first_name');
        $lastname = $this->getData('last_name');
        $username = $this->getData('username');
        $name = $this->getData('name');
        $email =$this->getData('email');
        $established_date =$this->getData('established_date');
        $phone_no=$this->getData('phone_no');
        $phone_no_2=$this->getData('phone_no_2');
        $space_area=$this->getData('space_area');
        $nationality_id =$this->getData('nationality_id');
        $person_capacity =$this->getData('person_capacity');
        $hall_charge =$this->getData('hall_charge');
        $this
            ->add('first_name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'First Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required'],
                    'value'=>$firstname
                ]
            )

            ->add('last_name','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Last Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'value'=>$lastname
                ]
            )
            ->add('username','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Username',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'rules'=>['required'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'value'=>$username
                ]
            )
            ->add('name','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Venue Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required'],
                    'value'=>$name
            ]
            )

            ->add('email','email', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Email Address',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required','email','unique:registered_users'],
                    'value'=>$email

                ]
            )

            ->add('established_date','date',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Established date',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
                   'value'=>$established_date
                ]
            )

            ->add('phone_no','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Phone No.',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required'],
                    'value'=>$phone_no

                ]
            )

            ->add('phone_no_2','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Phone No.2',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'value'=>$phone_no_2

                ]
            )

            ->add('space_area','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Space Area',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required'],
                    'value'=>$space_area

                ]
            )



            ->add('nationality_id','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Nationality ID',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required'],
                    'value'=>$nationality_id

                ]
            )

            ->add('person_capacity','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Person Capacity',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                         'rules'=>['required'],
                    'value'=>$person_capacity
                ]
            )
            ->add('hall_charge','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'Hall Charge',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required'],
                    'value'=>$hall_charge
                ]
            )
         //   ->compose(\Venue\Forms\AddressForm::class,['country'=>$this->getData('country'),'province'=>$this->getData('province'),'zone'=>$this->getData('zone'),'district'=>$this->getData('district'),])

            ->add('update','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);


            ;
    }
}
