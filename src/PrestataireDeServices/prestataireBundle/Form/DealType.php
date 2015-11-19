<?php

namespace PrestataireDeServices\prestataireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DealType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
       
        $builder
            ->add('libelle')
            ->add('typedeal','choice',array(
              'choices'=>array(
                  'Service'=>'service',
                  'Produit'=>'produit'
              )  
            ))
            ->add('categorie','choice',array(
                'choices'=>array(
                  'Technologie'=>'Technologie',
                    'Vetements'=>'Vetements',
                    'Domestique'=>'Domestique',
                    'Produit de Luxe'=>'Produit de Luxe'
                )
            ))
            ->add('prixinitial')
            ->add('prixpromotionnel')
            ->add('datedebut')
            ->add('datefin')
            ->add('image')
            ->add('statut','hidden',array('data' => "client"))
            ->add('quantite')
            ->add('descriptif');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PrestataireDeServices\prestataireBundle\Entity\Deal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'prestatairedeservices_prestatairebundle_deal';
    }
}
