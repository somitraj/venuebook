<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class AddressForm extends Form  //also includes user type content
{
    public function buildForm()
    {

         $countries=$this->getFormOption('country');
        $provinces=$this->getFormOption('province');
       // print_r($provinces); die();

        $zones=$this->getFormOption('zone');
        $districts=$this->getFormOption('district');
       /* $localities=$this->getFormOption('locality');*/

        /*$usertypeOption=[];*/
        $countryOption=[];
        $provinceOption=[];
        $zoneOption=[];
        $districtOption=[];
      /*  $localityOption=[];*/

        /*foreach($usertypes->user_types as $usertype)
        {
            $usertypeOption[$usertype->id]=$usertype->type_name;
        }*/
        foreach($countries->tbl_countries as $country)
        {
           $countryOption[$country->id]=$country->name;
        }
      //  print_r($provinces);
       // die();
        foreach($provinces->tbl_provinces as $province)
        {
            $provinceOption[$province->id]=$province->name;
        }
        foreach($zones->tbl_zones as $zone)
        {
            $zoneOption[$zone->id]=$zone->name;
        }
        foreach($districts->tbl_districts as $district)
        {
            $districtOption[$district->id]=$district->name;
        }



      $this

                     ->add('Country', 'select', [
                    'choices' => $countryOption,
                   /*  'selected' => 'en',*/
                     'empty_value' => '=== Select Country ===',
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                     'attr' =>['class' => 'col-md-8 form-control field-input']
            ]
            )



            ->add('Province','select', [
                    'choices' => $provinceOption,
                    /*'selected' => 'en',*/
                    'empty_value' => '=== Select Province ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Zones','select', [
                    'choices' => $zoneOption,
                 /*   'selected' => 'bg',*/
                    'empty_value' => '=== Select Zone ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('District','select', [
                    'choices' => $districtOption,
                    /*'selected' => 'Ktm',*/
                    'empty_value' => '=== Select District ===',
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            )
            ->add('Locality','text', [
                    'wrapper' => ['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' => ['class' => 'col-md-8 form-control field-input']

                ]
            );



//            ->add('submit','submit',['attr' =>['class'=> 'btn btn-primary btn-block']]);
    }
}
