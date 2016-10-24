<?php

namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RendezvousType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                            ->add('lieu', 'choice', array('choices' => array('tunis' => 'tunis', 'Ben Arous' => 'Ben Arous','Ariana' => 'Ariana','Beja' => 'Beja','Bizerte' => 'Bizerte','Gabes' => 'Gabes','Gafsa' => 'Gafsa','jendouba' => 'jendouba','kairouan' => 'kairouan','kasserin' => 'kasserin','kebili' => 'kebili','Kef' => 'Kef','Mahdia' => 'Mahdia','Mannouba' => 'Mannouba','Medenin' => 'Medenin','Monastir' => 'Monastir','Nabeul' => 'Nabeul','Sfax' => 'Sfax','Sidi Bouzid' => 'Sidi Bouzid','Seliana' => 'Seliana','Tataouin' => 'Tataouin','Tataouin' => 'Tataouin','Tozeur' => 'Tozeur','Zaghouan' => 'Zaghouan')))

            ->add('date','date',array('input'=>'string'))
            ->add('idClient','entity',array('class'=>'ProjetDarnaBundle:Personne','property'=>'nom'))
            ->add('idOffre','entity',array('class'=>'ProjetDarnaBundle:Offre','property'=>'description'))

            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Rendezvous'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_darnabundle_rendezvous';
    }
}
