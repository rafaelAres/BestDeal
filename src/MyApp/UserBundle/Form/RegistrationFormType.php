<?php

namespace MyApp\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('prenom');
        $builder->add('adresse');
        
        
    }

    public function getName()
    {
        return 'MyApp_user_registration';
    }
}