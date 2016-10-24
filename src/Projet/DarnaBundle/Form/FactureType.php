<?php

namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FactureType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('date','date',array('input'=>'string'))
                ->add('idgerant', 
                        'entity', 
                        array('class' => 'ProjetDarnaBundle:Personne', 
                            'property' => 'nom'))
                ->add('idclient', 'entity', array('class' => 'ProjetDarnaBundle:Personne', 'property' => 'nom'))
                ->add('idoffre', 'entity', array('class' => 'ProjetDarnaBundle:Offre', 'property' => 'engagement'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Facture'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'projet_darnabundle_facture';
    }

}
