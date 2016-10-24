<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class clientController extends Controller
{
    public function ajoutAction()
    { $personne=new \Projet\DarnaBundle\Entity\Personne(); 
    $personne->setType('c');
        $form=$this->createForm(new \Projet\DarnaBundle\Form\ClientType(),$personne);
        
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            
            
            
                
            
            $em->persist($personne);
            $em->flush();
           return $this->redirect($this->generateUrl('projet_afficher_client')); 
            }
         
        return $this->render('ProjetDarnaBundle:client:ajouterClient.html.twig', array('form' => $form->createView()));
    }
    
     public function listerAction()
    {  $em=$this->getDoctrine()->getManager();
        $personnes=$em->getRepository('ProjetDarnaBundle:Personne')->findBy(array('type' => 'c'));

    return $this->render('ProjetDarnaBundle:client:listerClient.html.twig', array('personnes'=>$personnes));
         
  
    }
    
    
      public function supprimerAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository("ProjetDarnaBundle:Personne")->find($id);
        $em->remove($personne);
        $em->flush();
        return $this->redirect($this->generateUrl('projet_afficher_client'));   
         
  
    }
    
        public function modifierAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository("ProjetDarnaBundle:Personne")->find($id);
        $form= $this->createForm(new \Projet\DarnaBundle\Form\ClientType(),$personne);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($personne);
                $em->flush();
                return $this->redirect($this->generateUrl('projet_afficher_client')); 
            }
      
        return $this->render("ProjetDarnaBundle:client:modifierClient.html.twig",
                array('form'=>$form->createView()));
         
  
    }
    
    
}
