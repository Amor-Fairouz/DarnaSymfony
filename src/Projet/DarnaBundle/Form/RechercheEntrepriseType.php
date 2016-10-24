<?php


namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface  $builder,array $options)
           {
        $builder 
                ->add('nbrEtage','integer')
                ->add('Rechercher','submit');
            }
            public function getName(){
       // return 'Modele';
    }
}

