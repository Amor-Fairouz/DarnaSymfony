<?php
namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Facture;
use Projet\DarnaBundle\Form\FactureType;
use Projet\DarnaBundle\Form\RechercheFactureType;
use Ob\HighchartsBundle\Highcharts\Highchart;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FactureController
 *
 * @author amor
 */
class FactureController extends Controller {
    
    public function AjouterFactureAction()
    {
         $facture=new Facture();
        $form=$this->createForm(new FactureType(),$facture);
        //update
        $request=$this->getRequest();
        if($form->handleRequest($request)->isValid())
            {
            ///recuperer une instance ORM
            $em=$this->getDoctrine()->getManager();
            //faire laction d'ajout
            $em->persist($facture);
            //confirmation pour notre demande(ajout...)executer
            $em->flush();
            
          return $this->redirect($this->generateUrl('Afficher_Facture')); 
            }
         
        return $this->render('ProjetDarnaBundle:Facture:ajouterFacture.html.twig'
                , array('Facture' => $form->createView()));
        
        
    }
    
  public function listerFactureAction()
    {  
      $em=$this->getDoctrine()->getManager();
      $facture=$em->getRepository('ProjetDarnaBundle:Facture')->findAll();
      return $this->render('ProjetDarnaBundle:Facture:afficherFacture.html.twig'
            , array('Facture'=>$facture));
    }
    
    public function  SupprimerFactureAction($idfacture)
    {
        $em=$this->getDoctrine()->getManager();
        $facture=$em->getRepository("ProjetDarnaBundle:Facture")->find($idfacture);
        $em->remove($facture);
        $em->flush();
        return $this->redirect($this->generateUrl('Afficher_Facture'));   
    }
    
    public function  ModifierFactureAction($idfacture)
    {
        
        $em=$this->getDoctrine()->getManager();
        $facture=$em->getRepository("ProjetDarnaBundle:Facture")->find($idfacture);
        $form= $this->createForm(new FactureType(),$facture);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($facture);
                $em->flush();
                return $this->redirect($this->generateUrl('Afficher_Facture')); 
            }
      
        return $this->render("ProjetDarnaBundle:Facture:modifierFacture.html.twig"
                ,array('Facture'=>$form->createView()));
        
    }
    
    public function ChercherFactureAction()
    {
       $facture=new Facture();
       $em=$this->getDoctrine()->getManager();
       $factures=$em->getRepository("ProjetDarnaBundle:Facture")->findAll();
       $form=$this->createForm(new RechercheFactureType(),$facture);
       $request= $this->get('request');
       $form->handleRequest($request);
       if($form->isValid()){
       
       $factures=$em->getRepository("ProjetDarnaBundle:Facture")
               ->findBy(array('date'=>$facture->getDate()));
       

       }
 return $this->render("ProjetDarnaBundle:Facture:rechercheFacture.html.twig",
         array('facture'=>$form->createView(),
             'factures'=>$factures));
    }
    
    
    
    
    
    
    public function AfficherFacttAction()
    {
    $em=$this->container->get('doctrine')->getEntityManager();
    $facture = $em->getRepository('ProjetDarnaBundle:Facture')->findBy(array('id'=>'asc'));
return $this->render('ProjetDarnaBundle:Facture:afficherFacture.html.twig'
            , array('Facture'=>$facture));
       
       
       
    }



    }
