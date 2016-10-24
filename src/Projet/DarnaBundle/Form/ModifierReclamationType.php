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


class ModifierReclamationType extends AbstractType{
    //put your code here
      public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder
            ->add('question')
             ->add('reponse')
            ->add('idClient','entity',array('class'=>'ProjetDarnaBundle:Personne','property'=>'nom'))
             ->add('Modifier','submit')
    ;
    }
   
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Reclamation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_darnabundle_reclamation';
    }
}
