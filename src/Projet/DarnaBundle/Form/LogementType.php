<?php

namespace Projet\DarnaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Projet\DarnaBundle\Entity\Offre;

class LogementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
                    
            ->add('description', 'textarea')
            ->add('date','date',array('input' => 'string'))
            ->add('region', 'choice', array('choices' => array('tunis' => 'tunis', 'Ben Arous' => 'Ben Arous','Ariana' => 'Ariana','Beja' => 'Beja','Bizerte' => 'Bizerte','Gabes' => 'Gabes','Gafsa' => 'Gafsa','jendouba' => 'jendouba','kairouan' => 'kairouan','kasserin' => 'kasserin','kebili' => 'kebili','Kef' => 'Kef','Mahdia' => 'Mahdia','Mannouba' => 'Mannouba','Medenin' => 'Medenin','Monastir' => 'Monastir','Nabeul' => 'Nabeul','Sfax' => 'Sfax','Sidi Bouzid' => 'Sidi Bouzid','Seliana' => 'Seliana','Tataouin' => 'Tataouin','Tataouin' => 'Tataouin','Tozeur' => 'Tozeur','Zaghouan' => 'Zaghouan')))
            ->add('prix')
            ->add('surface')
            ->add('engagement','choice', array('choices' => array('location' => 'location', 'vente' => 'vente')))
            ->add('nbrchambre','integer')
            ->add('surfacecouverte')
            ->add('idgerant','entity',array('class'=>'ProjetDarnaBundle:Personne','property'=>'nom'))     
            ->add('path', 'file', array('data_class' => null))       
                              
        ;
    }
    
        public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Projet\DarnaBundle\Entity\Offre',
        );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\DarnaBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Projet_DarnaBundle_Offre';
    }
    
    public static function processImage(UploadedFile $uploaded_file, Offre $offre)
    {
        $path = 'C:/wamp/www/Darna/web/images';
        //getClientOriginalName() => Returns the original file name.
        $uploaded_file_info = pathinfo($uploaded_file->getClientOriginalName());
        $file_name =
            "image_" .
            $uploaded_file->getClientOriginalName()
           
            ;

        $uploaded_file->move($path, $file_name);

        return $file_name;
    }
}