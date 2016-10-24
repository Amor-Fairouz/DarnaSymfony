<?php

namespace Projet\MailBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class MailType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('tel', 'integer')
                ->add('from', 'email')
                ->add('text', 'textarea')
        ;
    }

    public function getName() {
        return 'Mail';
    }

}

?>
