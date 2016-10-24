<?php

namespace Projet\DarnaBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Agence;
use Projet\DarnaBundle\Form\AgenceType ;

class AgenceController extends Controller{
   
    public function ajouterAgenceAction()
            
     { 
        $agence=new Agence(); 
   
        $form=$this->createForm(new AgenceType (),$agence);
        
        $request=$this->getRequest();
       
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($agence);
            $em->flush();
            
           return $this->redirect($this->generateUrl('Afficher_agence')); 
            }
         
        return $this->render('ProjetDarnaBundle:Agence:ajouterAgence.html.twig', array('agence' => $form->createView()));

            }
    
            
               public function listerAgenceAction()
    {  
        $em=$this->getDoctrine()->getManager();
        $agence=$em->getRepository('ProjetDarnaBundle:Agence')->findAll();
    return $this->render('ProjetDarnaBundle:Agence:afficherAgence.html.twig', array('agence'=>$agence));
         
  
    }
    
    
     public function supprimerAgenceAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $agence=$em->getRepository('ProjetDarnaBundle:Agence')->find($id);
        $em->remove($agence);
        $em->flush();
        return $this->redirect($this->generateUrl('Afficher_agence'));   
         
  
    }
    
     public function modifierAgenceAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $agence=$em->getRepository("ProjetDarnaBundle:Agence")->find($id);
        $form= $this->createForm(new AgenceType(),$agence);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($agence);
                $em->flush();
                return $this->redirect($this->generateUrl('Afficher_agence')); 
            }
      
        return $this->render("ProjetDarnaBundle:Agence:modifierAgence.html.twig",array('agence'=>$form->createView()));
         
  
    }
    
            
}
