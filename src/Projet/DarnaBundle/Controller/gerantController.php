<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class gerantController extends Controller
{
    public function ajoutAction()
    { $personne=new \Projet\DarnaBundle\Entity\Personne(); 
    $personne->setType('g');
        $form=$this->createForm(new \Projet\DarnaBundle\Form\GerantType(),$personne);
        
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($personne);
            $em->flush();
           return $this->redirect($this->generateUrl('projet_afficher_gerant')); 
            }
         
        return $this->render('ProjetDarnaBundle:gerant:ajouterGerant.html.twig', array('form' => $form->createView()));
    }
    
     public function listerAction()
    {  $em=$this->getDoctrine()->getManager();
        $personnes=$em->getRepository('ProjetDarnaBundle:Personne')->findBy(array('type' => 'g'));
    return $this->render('ProjetDarnaBundle:gerant:listerGerant.html.twig', array('personnes'=>$personnes));
         
  
    }
    
    
      public function supprimerAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository("ProjetDarnaBundle:Personne")->find($id);
        $em->remove($personne);
        $em->flush();
        return $this->redirect($this->generateUrl('projet_afficher_gerant'));   
         
  
    }
    
        public function modifierAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository("ProjetDarnaBundle:Personne")->find($id);
        $form= $this->createForm(new \Projet\DarnaBundle\Form\GerantType(),$personne);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($personne);
                $em->flush();
                return $this->redirect($this->generateUrl('projet_afficher_gerant')); 
            }
      
        return $this->render("ProjetDarnaBundle:gerant:modifierGerant.html.twig",
                array('form'=>$form->createView()));
         
  
    }
    
    
}
