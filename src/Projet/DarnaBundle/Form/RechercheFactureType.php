<?php
namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RechercheFactureType
 *
 * @author amor
 */
 class RechercheFactureType extends AbstractType {
    
     public function buildForm(FormBuilderInterface  $builder,array $options)
           {
         $builder 
                ->add('date')
                ->add('Rechercher','submit');
            }
            /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Facture'
        ));
    }

    public function getName() {
        
    }

//put your code here
}
