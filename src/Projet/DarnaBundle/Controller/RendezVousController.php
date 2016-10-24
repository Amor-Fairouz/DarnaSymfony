<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Rendezvous;
use Projet\DarnaBundle\Form\RendezvousType;


class RendezVousController extends Controller{
 
    public function AjoutRendezVousAction($idOffre)
     {
        
             $rdv=new \Projet\DarnaBundle\Entity\Rendezvous();     
        $form=$this->createForm(new \Projet\DarnaBundle\Form\RendezvousType(),$rdv);
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            $em=$this->getDoctrine()->getManager();
            $em->persist($rdv);
            $em->flush();
           return $this->redirect($this->generateUrl('rechercher_Tous'));
            }
            return $this->render('ProjetDarnaBundle:Projet:AjoutRendez.html.twig',array('form'=>$form->createView()));
  
    }
    
    
      function listeRendezAction() {
        $em = $this->getDoctrine()->getManager();
        $RendezVous = $em->getRepository('ProjetDarnaBundle:Rendezvous')->findAll();
        $Personne = $em->getRepository('ProjetDarnaBundle:Personne')->findAll();

        return
                $this->render('ProjetDarnaBundle:Projet:AfficherRendez.html.twig', array('Rendezvous' => $RendezVous));
                
    }
    
    public function RechercheAction(){
     
        $rendezVous=new Rendezvous();
 
       $em=$this->getDoctrine()->getManager();
       $rendezVouss=$em->getRepository("ProjetDarnaBundle:Rendezvous")->findAll();
       $form=$this->createForm(new \Projet\DarnaBundle\Form\RechercheRendezVousType(),$rendezVous);
       $request= $this->get('request');       //
       $form->handleRequest($request);//    print_r($reclamation->getQuestion());
       if($form->isValid()){
       
       $rendezVouss=$em->getRepository("ProjetDarnaBundle:Rendezvous")->findBy(array('lieu'=>$rendezVous->getLieu()));
       
       //print_r($reclamations);exit();
       }
 return $this->render("ProjetDarnaBundle:Projet:RechercheRendez.html.twig", array('Rendezvous'=>$form->createView(),'RendezVouss'=>$rendezVouss));
       
       }
       
       
       public function supprimerRendezVousAction($id)
    { 
           $em=$this->getDoctrine()->getManager();
        $rendezvous=$em->getRepository("ProjetDarnaBundle:Rendezvous")->find($id);
        $em->remove($rendezvous);
        $em->flush();
        return $this->redirect($this->generateUrl('ListRendez'));   
         
  
    }
    
     public function modifierRendezVousAction($id){
    
  $em=  $this->getDoctrine()->getManager();
  $modele=$em->getRepository('ProjetDarnaBundle:Rendezvous')->find($id);
  $form=$this->createForm(new \Projet\DarnaBundle\Form\ModifierRendezVousType(),$modele);

  $request=$this->getRequest();
    if($form->handleRequest($request)->isValid()) {
        
        $em->persist($modele);
        $em->flush();
        return $this->redirect(($this->generateUrl("ListRendez")));
    }
    return $this->render('ProjetDarnaBundle:Projet:ModifierRendez.html.twig',array('form'=>$form->createView())); 
}
       
       
}
