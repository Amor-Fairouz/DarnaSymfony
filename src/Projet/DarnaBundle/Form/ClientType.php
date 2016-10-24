<?php

namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add( 'datenaiss','birthday',array('input' => 'string'))
            ->add('tel')
            ->add('pays','country')
            ->add('password', 'password')
            ->add('email')
            ->add('adresse')
            
    
            ->add('Ajouter','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Personne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_darnabundle_personne';
    }
}
