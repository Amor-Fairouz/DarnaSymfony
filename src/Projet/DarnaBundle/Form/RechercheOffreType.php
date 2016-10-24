<?php


namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheOffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface  $builder,array $options)
           {
        $builder 
              ->add('type', 'choice', array('choices' => array('type' => ' ','e' => 'Entreprise','l' => 'Logement','t' => 'Terrain')) ) 
            ->add('region', 'choice', array('choices' => array('region' => ' ','tunis' => 'tunis', 'Ben Arous' => 'Ben Arous','Ariana' => 'Ariana','Beja' => 'Beja','Bizerte' => 'Bizerte','Gabes' => 'Gabes','Gafsa' => 'Gafsa','jendouba' => 'jendouba','kairouan' => 'kairouan','kasserin' => 'kasserin','kebili' => 'kebili','Kef' => 'Kef','Mahdia' => 'Mahdia','Mannouba' => 'Mannouba','Medenin' => 'Medenin','Monastir' => 'Monastir','Nabeul' => 'Nabeul','Sfax' => 'Sfax','Sidi Bouzid' => 'Sidi Bouzid','Seliana' => 'Seliana','Tataouin' => 'Tataouin','Tataouin' => 'Tataouin','Tozeur' => 'Tozeur','Zaghouan' => 'Zaghouan')))
              
                ->add('prixMin','integer')
                 ->add('prixMax','integer')
            ->add('engagement','choice', array('choices' => array('engagement' => ' ','location' => 'location', 'vente' => 'vente')))
                ->add('Rechercher','submit');
            }
            public function getName(){
       // return 'Modele';
    }
    
    
    
}

