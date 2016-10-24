<?php
namespace Projet\DarnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\ModeleRepository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PdfController
 *
 * @author amor
 */
class PdfController extends Controller {
    
    public function generatePDFAction($idfacture)
    {
        $em = $this->getDoctrine()->getManager();
    $facture= $em->getRepository('ProjetDarnaBundle:Facture')->find( $idfacture);
    /*$offre = $em->getRepository('ProjetDarnaBundle:Facture')->FindOffreDQL($idfacture);
    $client= $em->getRepository('ProjetDarnaBundle:Facture')->FindClientDQL($idfacture);
    //$facts=array("date"=>$date,"client"=>$client,"offre"=>$offre);*/
    $content = $this->renderView('ProjetDarnaBundle:Facture:template.html.twig',
            array("factures"=>$facture));
    $pdfData = $this->get('obtao.pdf.generator')->outputPdf($content);

    /* You can also pass some options.
       The following options are available :
            protecte
     * 
     *  $font = 'Arial'
            protected $format = 'P'
            protected $language = 'en'
            protected $size = 'A4'
       Here is an example to generate a pdf with a special font and a landscape orientation
    */
   $pdfData = $this->get('obtao.pdf.generator')->outputPdf($content,array('font'=>'Georgia','format'=>'L'));

    $response = new Response($pdfData);
    $response->headers->set('Contenst-Type','application/pdf');

    return $response;
    }
    
    
    
    
    
        
        
        
        
    
}
