<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class RegistrationForm extends Form
{
    public function buildForm()
    {
       // print_r($this->getData('country'));die();
        $this
            ->add('name','text',[
                'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                'attr' =>['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']
            ]
            )

            ->add('','text',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Type Name',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            )
            ->add('type_name','select', [
                  /*  'choices' => $type_nameOption,*/
                'selected' => 'en',
                    'empty_value' => '=== Select Province ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                    'rules'=>['required']
                ]
            )
            ->add('image','file',[
                    'wrapper' =>['class' => 'form-group row'],
                    'label'=>'Image',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input'],
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
                    'label'=>'Confirm Password',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input'],
                         /*'rules'=>['required']*/

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


/*            ->add('user_type','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label'=>'User Type',
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )*/


/*            ->compose(\Venue\Forms\AddressForm::class,['usertype'=>$this->getData('usertype'),'country'=>$this->getData('country'),'province'=>$this->getData('province'),'zone'=>$this->getData('zone'),'district'=>$this->getData('district'),])*/




            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ->add('reset','reset',['attr' =>['class'=> 'btn btn-primary btn-block']])
            ;
    }
}
