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
 * Description of AlerteType
 *
 * @author amor
 */
class AlerteType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prixmin')
            ->add('prixmax')
            ->add('region')
            ->add('idclient','entity',
                    array('class'=>'ProjetDarnaBundle:Personne','property'=>'prenom'))
            ->add('idoffre','entity',array('class'=>'ProjetDarnaBundle:Offre',
                'property'=>'description'))
            ->add('engagement')
            ->add('typedebien') 
            ->add('surface')
        ;
    }
    
     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Alerte'
        ));
    }
    public function getName() {
        
    }

}
