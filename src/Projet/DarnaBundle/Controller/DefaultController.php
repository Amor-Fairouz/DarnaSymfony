<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetDarnaBundle:Default:index.html.twig');
    }
    
    public function AccueilGerantAction()
    {
        return $this->render('ProjetDarnaBundle:Default:AccueilGerant.html.twig');
    }
    
    public function AccueilAction()
    {
        return $this->render('ProjetDarnaBundle:Default:Accueil.html.twig');
    }
    
    
     public function redirectAction()
    {
         $container=$this->container;
           $security = $container->get('security.context');
           echo $security->getToken();
           
         // if((!$this->get('security.context')->isGranted('ROLE_USER'))&&(!$this->get('security.context')->isGranted('ROLE_ADMIN')))
         if ($this->get('security.context')->isGranted('ROLE_UTILISATEUR'))

         { return $this->redirect($this->generateUrl('rechercher_Tous'));   }
      
           
           else{
        //return $this->render('ProjetDarnaBundle:Default:redirect.html.twig');
         if ($this->get('security.context')->isGranted('ROLE_ADMIN'))
         { return $this->redirect($this->generateUrl('home_administrateur'));}
         else {
             if($this->get('security.context')->isGranted('ROLE_USER'))
         {return $this->redirect($this->generateUrl('homeGerant'));}}
           }
      //str_split($rol);
    }
}
