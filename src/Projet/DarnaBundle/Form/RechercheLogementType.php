<?php


namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecherchelogementType extends AbstractType
{
    public function buildForm(FormBuilderInterface  $builder,array $options)
           {
        $builder 
                ->add('nbrchambre','integer')
                ->add('Rechercher','submit');
            }
            public function getName(){
       // return 'Modele';
    }
}

