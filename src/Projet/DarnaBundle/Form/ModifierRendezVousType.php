<?php

namespace Projet\DarnaBundle\Form;


/**
 * Description of ModifierReclamationType
 *
 * @author Khalil
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



/**
 * Description of ModifierRendezVousType
 *
 * @author Khalil
 */
class ModifierRendezVousType extends AbstractType {
    
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder
            ->add('lieu')
             ->add('date')
             ->add('idOffre','entity',array('class'=>'ProjetDarnaBundle:Offre','property'=>'description'))
             ->add('idClient','entity',array('class'=>'ProjetDarnaBundle:Personne','property'=>'nom'))
             ->add('Modifier','submit')
    ;
    }
   
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
