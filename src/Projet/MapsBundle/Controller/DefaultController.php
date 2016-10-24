<?php

namespace Projet\MapsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  \Projet\MapsBundle\Entity\Locations;
class DefaultController extends Controller {

    public function indexAction() {
        

          $em = $this->getDoctrine()->getManager();
        $Locations = $em->getRepository('ProjetMapsBundle:Locations')->findAll();
       
        
        
        return $this->render('ProjetMapsBundle:Default:index.html.twig', array('Locations'=>$Locations));
    }

}
