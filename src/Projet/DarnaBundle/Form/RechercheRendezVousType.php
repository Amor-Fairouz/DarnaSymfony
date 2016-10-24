<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RechercheRendezVousType
 *
 * @author Khalil
 */
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

namespace Projet\DarnaBundle\Form;

class RechercheRendezVousType extends \Symfony\Component\Form\AbstractType {
    
     public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder,array $options)
           {
        $builder 
                
                            ->add('lieu', 'choice', array('choices' => array('tunis' => 'tunis', 'Ben Arous' => 'Ben Arous','Ariana' => 'Ariana','Beja' => 'Beja','Bizerte' => 'Bizerte','Gabes' => 'Gabes','Gafsa' => 'Gafsa','jendouba' => 'jendouba','kairouan' => 'kairouan','kasserin' => 'kasserin','kebili' => 'kebili','Kef' => 'Kef','Mahdia' => 'Mahdia','Mannouba' => 'Mannouba','Medenin' => 'Medenin','Monastir' => 'Monastir','Nabeul' => 'Nabeul','Sfax' => 'Sfax','Sidi Bouzid' => 'Sidi Bouzid','Seliana' => 'Seliana','Tataouin' => 'Tataouin','Tataouin' => 'Tataouin','Tozeur' => 'Tozeur','Zaghouan' => 'Zaghouan')))

                ->add('Rechercher','submit');
            }
            
            
            
     
    
    
            public function getName(){
       // return 'Modele';
    }
    
    
}
