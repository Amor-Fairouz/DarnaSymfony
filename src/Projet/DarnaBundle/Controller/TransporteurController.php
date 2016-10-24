<?php


namespace Projet\DarnaBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Transporteur;
use Projet\DarnaBundle\Form\TransporteurType;


class TransporteurController extends Controller{
    
    
     public function ajouterTransporteurAction()
            
     { 
        $transporteur=new Transporteur(); 
   
        $form=$this->createForm(new TransporteurType(),$transporteur);
        
        $request=$this->getRequest();
       
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($transporteur);
            $em->flush();
            
           return $this->redirect($this->generateUrl('Afficher_transp')); 
            }
         
        return $this->render('ProjetDarnaBundle:Transporteur:ajouterTransp.html.twig', array('transporteur' => $form->createView()));

            }
    
     public function listerTransporteurAction()
    {  $em=$this->getDoctrine()->getManager();
        $transporteur=$em->getRepository('ProjetDarnaBundle:Transporteur')->findAll();
    return $this->render('ProjetDarnaBundle:Transporteur:afficherTransporteur.html.twig', array('transporteur'=>$transporteur));
         
  
    }
    
      public function supprimerTransporteurAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $transporteur=$em->getRepository('ProjetDarnaBundle:Transporteur')->find($id);
        $em->remove($transporteur);
        $em->flush();
        return $this->redirect($this->generateUrl('Afficher_transp'));   
         
  
    }
    
  
    
     public function modifierTransporteurAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $transporteur=$em->getRepository("ProjetDarnaBundle:Transporteur")->find($id);
        $form= $this->createForm(new TransporteurType(),$transporteur);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($transporteur);
                $em->flush();
                return $this->redirect($this->generateUrl('Afficher_transp')); 
            }
      
        return $this->render("ProjetDarnaBundle:Transporteur:modifierTransporteur.html.twig",array('transporteur'=>$form->createView()));
         
  
    }
    
    
    
    
}
