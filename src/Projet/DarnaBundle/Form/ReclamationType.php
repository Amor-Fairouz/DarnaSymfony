<?php

namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReclamationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question','textarea')
            ->add('idClient','entity',array('class'=>'ProjetDarnaBundle:Personne','property'=>'nom'))
             ->add('Envoyer','submit')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
        */
       public function setDefaultOptions(OptionsResolverInterface $resolver)
       {
           $resolver->setDefaults(array(
               'data_class' => 'Projet\DarnaBundle\Entity\Reclamation'
           ));
       }

       /**
        * @return string
        */
       public function getName()
       {
           return 'projet_darnabundle_reclamation';
       }
   }
