<?php
namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheTerrainType extends AbstractType
{
    public function buildForm(FormBuilderInterface  $builder,array $options)
           {
        $builder 
                
                ->add('vocation','choice', array('choices' => array('agricole' => 'agricole', 'constructibles' => 'constructibles')))
                ->add('Rechercher','submit');
            }
            public function getName(){
       // return 'Modele';
    }
}

