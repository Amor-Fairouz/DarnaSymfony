<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    
     public function indexAction()
    {
        
        return $this->render('ProjetDarnaBundle:Default:index.html.twig'
                  );
    }
    public function ajoutAction()
    { $personne=new \Projet\DarnaBundle\Entity\Personne(); 
    $personne->setType('a');
        $form=$this->createForm(new \Projet\DarnaBundle\Form\PersonneType(),$personne);
        
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($personne);
            $em->flush();
           return $this->redirect($this->generateUrl('projet_afficher_admin')); 
            }
         
        return $this->render('ProjetDarnaBundle:admin:ajouterAdmin.html.twig', array('form' => $form->createView()));
    }
    
     public function listerAction()
    {  $em=$this->getDoctrine()->getManager();
        $personnes=$em->getRepository('ProjetDarnaBundle:Personne')->findBy(array('type' => 'a'));
         
    return $this->render('ProjetDarnaBundle:admin:listerAdmin.html.twig', array('personnes'=>$personnes));
         
  
    }
    
    
      public function supprimerAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository("ProjetDarnaBundle:Personne")->find($id);
        $em->remove($personne);
        $em->flush();
        return $this->redirect($this->generateUrl('projet_afficher_admin'));   
         
  
    }
    
        public function modifierAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository("ProjetDarnaBundle:Personne")->find($id);
        $form= $this->createForm(new \Projet\DarnaBundle\Form\PersonneType(),$personne);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($personne);
                $em->flush();
                return $this->redirect($this->generateUrl('projet_afficher_admin')); 
            }
      
        return $this->render("ProjetDarnaBundle:admin:modifierAdmin.html.twig",
                array('form'=>$form->createView()));
         
  
    }
    
    
}
