<?php

namespace Venue\Forms;

use Kris\LaravelFormBuilder\Form;

class VenueTypeForm extends Form  //also includes user type content
{
    public function buildForm()
    {
        $venue_types=$this->getFormOptions('venuetype');
      // print_r($venue_types);die();
        $venueOption = [];
        foreach($venue_types->venue_type as $venue_type)
        {
                  $venueOption[$venue_type->id]=$venue_type->type_name;
        }
            $this
                ->add('venue_type', 'select', [
                        'choices' => $venueOption,
                        /*  'selected' => 'en',*/
                        'label' => 'Venue Type',
                        'empty_value' => '=== Select Venue Type ===',
                        'wrapper' => ['class' => 'form-group row'],
                        'label_attr' => ['class' => 'col-md-3 control-label'],
                        'attr' => ['class' => 'col-md-8 form-control field-input']
                    ]
                );

        }
    }
