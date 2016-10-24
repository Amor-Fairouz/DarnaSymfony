<?php

namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Offre;
use Projet\DarnaBundle\Form\OffreType;
use Projet\DarnaBundle\Form\RechercheOffreType;
use Projet\DarnaBundle\Form\TerrainType;
use Projet\DarnaBundle\Form\EntrepriseType;

class OffreController extends Controller
{
    
    
    
    public function listAction(){
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findAll();
    return $this->render('ProjetDarnaBundle:Offre:afficherOffre.html.twig', array('offre'=>$offre));
    }
    
    
    public function supprimerAction ($id){
    
        $id=$this->get('request')->get('id');
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl('afficher_Offre'));   
    }
    
    
    public function updateAction ($id){
       $id=$this->get('request')->get('id');
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $form= $this->createForm(new OffreType(),$offre);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                return $this->redirect($this->generateUrl('afficher_Offre')); 
            }
    
     return $this->render("ProjetDarnaBundle:Offre:modifierOffre.html.twig", array('offre'=>$form->createView()));
}
    


    public function rechercheTypeAction($type,$liste){
          $an = new \ArrayIterator();
     $em=$this->getDoctrine()->getManager();
     
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' =>$type ));
    return $this->render('ProjetDarnaBundle:Offre:OffreFrontOffice.html.twig', array('offre'=>$offre));
       }
       public function recherchePrixAction($annonces){
      $an = new \ArrayIterator();
        $Request = $this->getRequest();
        $min = $Request->get('prixMin');
        $max = $Request->get('prixMax');
        if ($min != 'prixMin' && $max != 'prixMax') {
            foreach ($annonces as $annonce) {
                if ($annonce->getPrix() < $max && ($annonce->getPrix()) > $min) {
                    $an->append($annonce);
                }
            }
            return $an;
        } 
        elseif ($min != 'min'  && $max == 'prixMax' ) {
            foreach ($annonces as $annonce) {
                if ( ($annonce->getPrix()) > $min) {
                    $an->append($annonce);
                }
            }
            return $an;
        }
        elseif ($min == 'prixMin' && $max != 'prixMax'  ) {
            foreach ($annonces as $annonce) {
                if ($annonce->getPrix() < $max) {
                    $an->append($annonce);
                }
            }
            return $an;
        }   
        else
            {
return $annonces;
}
       }
       
       
       
       
       
       
       
       
       
       public function rechercheRegionAction($annonces){
      $an = new \ArrayIterator();
        $Request = $this->getRequest();
        $region = $Request->get('region');
        if ($region != "region" ) {
            foreach ($annonces as $annonce) {
                if ($annonce->getRegion()==$region) {
                    $an->append($annonce);
                }
            }
            return $an;
        }  
        else
            {
return $annonces;
}
       }
       
        public function rechercheEngagementAction($annonces){
      $an = new \ArrayIterator();
        $Request = $this->getRequest();
        $region = $Request->get('engagement');
        if ($region != "engagement" ) {
            foreach ($annonces as $annonce) {
                if ($annonce->getEngagement()==$region) {
                    $an->append($annonce);
                }
            }
            return $an;
        }  
        else
            {
return $annonces;
}
       }
       
       
       
       
       
       
       
       
       
       
       
           public function recherchegeneralAction()
    {  
    
            $em = $this->getDoctrine()->getEntityManager();
        $Request = $this->getRequest();
        
        $annonces = $em->getRepository('ProjetDarnaBundle:Offre')->findAll();

    $type = $Request->get('type');

            if ($type != "type") {
                $annonces = $em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => $type));
            }
           
            $annonces=$this->recherchePrixAction($annonces);
            $annonces=$this->rechercheRegionAction($annonces);
            $annonces=  $this->rechercheEngagementAction($annonces);
      $offre=new \Projet\DarnaBundle\Entity\Recherche();
    $offre->setPrixMax(9000000);
    $offre->setPrixMin(1);
        $form=$this->createForm(new RechercheOffreType(),$offre);
        
        $request=$this->getRequest();
       
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
         
            $em->flush();
            
                return $this->render('ProjetDarnaBundle:Offre:afficherOffre.html.twig', array('annonces' => $annonces));

            }
         
        return $this->render('ProjetDarnaBundle:Default:home.html.twig', array('offre' => $form->createView()));

  
    }  
    
       
          public function listerOffreFAction()
    { 
             // $form= $this->createForm(new OffreType(),$offre);
              $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 'e'));
    return $this->render('ProjetDarnaBundle:Offre:OffreFrontOffice.html.twig', array('offre'=>$offre));
         
  
    }
    
}