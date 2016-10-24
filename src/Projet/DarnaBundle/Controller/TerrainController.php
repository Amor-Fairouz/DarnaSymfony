<?php

namespace Projet\DarnaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Offre;
use Projet\DarnaBundle\Form\TerrainType;
use Projet\DarnaBundle\Form\RechercheTerrainType;

class TerrainController extends Controller{
    
    public function ajouterTerrainAction()
            
    { 
        $offre=new Offre(); 
    $offre->setType('t');
        $form=$this->createForm(new TerrainType(),$offre);
        
        $request=$this->getRequest();
        $offre->upload();
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($offre);
            $em->flush();
            
           return $this->redirect($this->generateUrl('afficher_Terrain')); 
            }
         
        return $this->render('ProjetDarnaBundle:Terrain:ajouterTerrain.html.twig', array('offre' => $form->createView()));

            }
            
            
              public function listerTerrainAction()
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 't'));
    return $this->render('ProjetDarnaBundle:Terrain:afficherTerrain.html.twig', array('offre'=>$offre));
     
    }
    
    
        public function listerTerrainfrontAction()
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 't'));
    return $this->render('ProjetDarnaBundle:Terrain:afficherTerrainFront.html.twig', array('offre'=>$offre));
         
  
    }
    
     
      public function supprimerTerrainAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl('afficher_Terrain'));   
         
  
    }
    
      public function modifierTerrainAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $form= $this->createForm(new TerrainType(),$offre);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                return $this->redirect($this->generateUrl('afficher_Terrain')); 
            }
      
        return $this->render("ProjetDarnaBundle:Terrain:modifierTerrain.html.twig",array('offre'=>$form->createView()));
         
  
    }
    
    
     
    public function rechercherTerrainAction(){
      $offre=new Offre();
      
       $em=$this->getDoctrine()->getManager();
       $offres=$em->getRepository("ProjetDarnaBundle:Offre")->findBy(array('type'=>'t'));
       $form=$this->createForm(new RechercheTerrainType(),$offre);
       $request= $this->get('request');
       $form->handleRequest($request);
       if($form->isValid()){
       
       $offres=$em->getRepository("ProjetDarnaBundle:Offre")->findBy(array('vocation'=>$offre->getVocation()));
       

       }
 return $this->render("ProjetDarnaBundle:Terrain:rechercherTerrain.html.twig", array('offre'=>$form->createView(),'offres'=>$offres));
       
       }
    
            
            
}
            
            
            