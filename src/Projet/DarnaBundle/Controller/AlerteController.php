<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Alerte;
use Projet\DarnaBundle\Form\AlerteType;

class AlerteController extends Controller{
    
    public function AjouterAlerteAction()
    {
         $alerte=new Alerte();
        $form=$this->createForm(new AlerteType(),$alerte);
        
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('Afficher_message'));
          //return $this->redirect($this->generateUrl('Afficher_Facture')); 
            }
         
        return $this->render('ProjetDarnaBundle:Alerte:ajouterAlerte.html.twig'
                , array('Alerte' => $form->createView()));
        
        
    }
    public function msgAction()
    {  
        $em=$this->getDoctrine()->getManager();
        return $this->render('ProjetDarnaBundle:Alerte:message.html.twig');
    }
   
    
    
    public function listerAlerteAction()
    {  
      $em=$this->getDoctrine()->getManager();
      $alerte=$em->getRepository('ProjetDarnaBundle:Alerte')->findAll();
      return $this->render('ProjetDarnaBundle:Alerte:afficherAlerte.html.twig'
            , array('Alerte'=>$alerte));
    }
    public function  SupprimerAlerteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $alerte=$em->getRepository("ProjetDarnaBundle:Alerte")->find($id);
        $em->remove($alerte);
        $em->flush();
        return $this->redirect($this->generateUrl('Afficher_Alerte'));   
    }
    
    
    
}
