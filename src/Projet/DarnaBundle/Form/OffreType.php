<?php

namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('date')
            ->add('region')
            ->add('prix')
            ->add('surface')
            ->add('engagement','entity',array('class'=>'ProjetDarnaBundle:Offre','property'=>'engagement'))
            ->add('nbrchambre')
            ->add('surfacecouverte')
            ->add('idgerant','entity',array('class'=>'ProjetDarnaBundle:Personne','property'=>'nom'))     
             ->add('image', 'file', array('data_class' => null)  )    
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_darnabundle_offre';
    }
}
