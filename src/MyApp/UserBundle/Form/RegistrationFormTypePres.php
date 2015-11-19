<?php

namespace MyApp\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormTypePres extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        // add your custom field
          $builder->add('nom');
          $builder->add('prenom');
          $builder->add('adresse');
          
          $builder->add('datedenaissance');
          $builder->add('telephone');
          $builder->add('descriptif');
          $builder->add('societe');

    }

    public function getName()
    {
        return 'MyApp_user_registration_pres';
    }
}