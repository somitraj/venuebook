<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class VenueTypeForm extends Form  //also includes user type content
{
    public function buildForm()
    {
        $venue_types=$this->getFormOption('venue_type');
        $VenueOption=[];
        foreach($venue_types->venue_type as $venue)
        {
            $VenueOption[$venue->id]=$venue->type_name;
        }
        $this

            ->add('venue_type', 'select', [
                    'choices' => $VenueOption,
                    /*  'selected' => 'en',*/
                    'label'=>'Venue Type',
                    'empty_value' => '=== Select Venue Type ===',
                    'wrapper' =>['class' => 'form-group row'],
                    'label_attr'=>['class'=>'col-md-3 control-label'],
                    'attr' =>['class' => 'col-md-8 form-control field-input']
                ]
            );

    }
}
