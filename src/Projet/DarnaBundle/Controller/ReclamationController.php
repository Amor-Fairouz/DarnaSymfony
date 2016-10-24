<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReclamationController
 *
 * @author Khalil
 */

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Projet\DarnaBundle\Entity\Reclamation;
use Projet\DarnaBundle\Form\RechercheReclamationType;
use Projet\DarnaBundle\Form\ReponseType;


class ReclamationController extends Controller {
    
    public function AjoutReclamationAction()
     {
        
             $rec=new \Projet\DarnaBundle\Entity\Reclamation();  
        $form=$this->createForm(new \Projet\DarnaBundle\Form\ReclamationType(),$rec);
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            $em=$this->getDoctrine()->getManager();
            $em->persist($rec);
            $em->flush();
            return $this->redirect($this->generateUrl('rechercher_Tous'));
            }
            return $this->render('ProjetDarnaBundle:Projet:AjoutReclamation.html.twig',array('form'=>$form->createView()));
  
    }
    
    
    
    
     public function RepondreReclamationAction()
     {
        
             $rec=new \Projet\DarnaBundle\Entity\Reclamation();  
        $form=$this->createForm(new \Projet\DarnaBundle\Form\ReclamationType(),$rec);
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            $em=$this->getDoctrine()->getManager();
            $em->persist($rec);
            $em->flush();
            return new \Symfony\Component\HttpFoundation\Response('ajout avec succés');
            }
            return $this->render('ProjetDarnaBundle:Projet:AjoutReclamation.html.twig',array('form'=>$form->createView()));
  
    }
    
    
    function listeRecAction() {
        $em = $this->getDoctrine()->getManager();
        $Reclamation = $em->getRepository('ProjetDarnaBundle:Reclamation')->findAll();
       

        return
                $this->render('ProjetDarnaBundle:Projet:AfficherRec.html.twig', array('Reclamation' => $Reclamation));
                
    }
    
    
    
    public function RechercheAction(){
     
        $reclamation=new Reclamation();
 
       $em=$this->getDoctrine()->getManager();
       $reclamations=$em->getRepository("ProjetDarnaBundle:Reclamation")->findAll();
       $form=$this->createForm(new RechercheReclamationType(),$reclamation);
       $request= $this->get('request');       //
       $form->handleRequest($request);//    print_r($reclamation->getQuestion());
       if($form->isValid()){
       
       $reclamations=$em->getRepository("ProjetDarnaBundle:Reclamation")->findBy(array('question'=>$reclamation->getQuestion()));
       
       //print_r($reclamations);exit();
       }
 return $this->render("ProjetDarnaBundle:Projet:RechercheRec.html.twig", array('Reclamation'=>$form->createView(),'Reclamations'=>$reclamations));
       
       }
       
       
       
          public function supprimerReclamationAction($id)
    { 
           $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository("ProjetDarnaBundle:Reclamation")->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirect($this->generateUrl('ListRec'));   
         
  
    }
    
    
    public function modifierReclamationAction($id){
    
  $em=  $this->getDoctrine()->getManager();
  $modele=$em->getRepository('ProjetDarnaBundle:Reclamation')->find($id);
  $form=$this->createForm(new \Projet\DarnaBundle\Form\ModifierReclamationType(),$modele);

  $request=$this->getRequest();
    if($form->handleRequest($request)->isValid()) {
        
        $em->persist($modele);
        $em->flush();
        return $this->redirect(($this->generateUrl("ListRec")));
    }
    return $this->render('ProjetDarnaBundle:Projet:ModifierRec.html.twig',array('form'=>$form->createView())); 
}
      



   
}
