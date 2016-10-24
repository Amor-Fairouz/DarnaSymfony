<?php

namespace Projet\DarnaBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Offre;
use Projet\DarnaBundle\Form\RechercheOffreType;


use Projet\DarnaBundle\Form\RechercheEntrepriseType;
use Projet\DarnaBundle\Form\EntrepriseType;

class EntrepriseController extends Controller{
    
    public function ajouterEntrepriseAction()
            
     { 
        $offre=new Offre(); 
    $offre->setType('e');
        $form=$this->createForm(new EntrepriseType(),$offre);
        
        $request=$this->getRequest();
        $offre->upload();
        
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($offre);
            $em->flush();
            
           return $this->redirect($this->generateUrl('afficher_Entreprise')); 
            }
         
        return $this->render('ProjetDarnaBundle:Entreprise:ajouterEntreprise.html.twig', array('offre' => $form->createView()));

            }
            
    
    
     public function listerEntrepriseAction()
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 'e'));
    return $this->render('ProjetDarnaBundle:Entreprise:afficherEntreprise.html.twig', array('offre'=>$offre));
         
  
    }
       public function listerEntreprisefrontAction()
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 'e'));
    return $this->render('ProjetDarnaBundle:Entreprise:afficherEntrepriseFront.html.twig', array('offre'=>$offre));
         
  
    }
    
    
     
      public function supprimerEntrepriseAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl('afficher_Entreprise'));   
         
  
    }
    
    
     public function modifierEntrepriseAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $form= $this->createForm(new EntrepriseType(),$offre);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                return $this->redirect($this->generateUrl('afficher_Entreprise')); 
            }
      
        return $this->render("ProjetDarnaBundle:Entreprise:modifierEntreprise.html.twig",array('offre'=>$form->createView()));
         
  
    }
    
    
    public function rechercherEntrepriseAction(){
      $offre=new Offre();
      $offre->setType('e');
       $em=$this->getDoctrine()->getManager();
       $offres=$em->getRepository("ProjetDarnaBundle:Offre")->findBy(array('type'=>'e'));
       $form=$this->createForm(new RechercheEntrepriseType(),$offre);
       $request= $this->get('request');
       $form->handleRequest($request);
       if($form->isValid()){
       
       $offres=$em->getRepository("ProjetDarnaBundle:Offre")->findBy(array('nbrEtage'=>$offre->getNbrEtage()));
       

       }
 return $this->render("ProjetDarnaBundle:Entreprise:rechercherEntreprise.html.twig", array('offre'=>$form->createView(),'offres'=>$offres));
       
       }
       
   
       
       
      /* 
    public function rechercheByPrix($offres) {
      
        $offre = new Ofrre();
        $offres->setType('e');
          $off = new \ArrayIterator();
        $Request = $this->getRequest();
        $min = $Request->get('min');
        $max = $Request->get('max');
        if ($min != "min" && $max != "max") {
            foreach ($offres as $offre) {
                if ($offre->getPrix() < $max && ($offre->getPrix()) > $min) {
                    $off->append($offre);
                }
            }
            return $off;
        } 
        elseif ($min != "min") {
            foreach ($offres as $offre) {
                if ( ($offre->getPrix()) > $min) {
                    $off->append($offre);
                }
            }
            return $off;
        }
        elseif ($max != "max") {
            foreach ($offres as $offre) {
                if ($offre->getPrix() < $max) {
                    $off->append($offre);
                }
            }
            return $off;
        }   
        else
            return $offres;
    }
*/
}