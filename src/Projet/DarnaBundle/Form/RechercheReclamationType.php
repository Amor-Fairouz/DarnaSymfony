<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RechercheReclamationType
 *
 * @author Khalil
 */
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
namespace Projet\DarnaBundle\Form;

class RechercheReclamationType extends \Symfony\Component\Form\AbstractType{
    
    

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder,array $options)
           {
        $builder 
                ->add('question')
                ->add('Rechercher','submit');
            }
            
            
            
     
    
    
            public function getName(){
       // return 'Modele';
    }
}
    
    
