<?php



namespace Projet\DarnaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\DarnaBundle\Entity\Offre;
use Projet\DarnaBundle\Form\LogementType;
use Projet\DarnaBundle\Form\RecherchelogementType;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class LogementController extends Controller{
    
    public function ajouterLogementAction()
             { 
        $offre=new Offre(); 
    $offre->setType('l');
        $form=$this->createForm(new LogementType(),$offre);
        
        $request=$this->getRequest();
        $offre->upload();
        if($form->handleRequest($request)->isValid())
            {
            
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($offre);
            $em->flush();
            
           return $this->redirect($this->generateUrl('afficher_Logement')); 
            }
         
        return $this->render('ProjetDarnaBundle:Logement:ajouterLogement.html.twig', array('offre' => $form->createView()));

            }
    
    
    
      public function listerLogementAction()
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 'l'));
    return $this->render('ProjetDarnaBundle:Logement:afficherLogement.html.twig', array('offre'=>$offre));
         
  
    }
    
    
        public function listerLogementfrontAction()
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('ProjetDarnaBundle:Offre')->findBy(array('type' => 'l'));
    return $this->render('ProjetDarnaBundle:Logement:afficherLogementFront.html.twig', array('offre'=>$offre));
         
  
    }
    
    
       public function supprimerLogementAction($id)
    {  $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl('afficher_Logement'));   
         
  
    }
    
    public function modifierLogementAction($id)
    {  
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository("ProjetDarnaBundle:Offre")->find($id);
        $form= $this->createForm(new LogementType(),$offre);
        $request= $this->get('request');
        $form->handleRequest($request);
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                return $this->redirect($this->generateUrl('afficher_Logement')); 
            }
      
        return $this->render("ProjetDarnaBundle:Logement:modifierLogement.html.twig",array('offre'=>$form->createView()));
         
  
    }
    
    public function rechercherLogementAction(){
      $offre=new Offre();
      $offre->setType('l');
       $em=$this->getDoctrine()->getManager();
       $offres=$em->getRepository("ProjetDarnaBundle:Offre")->findBy(array('type'=>'l'));
       $form=$this->createForm(new RecherchelogementType (),$offre);
       $request= $this->get('request');
       $form->handleRequest($request);
       if($form->isValid()){
       
       $offres=$em->getRepository("ProjetDarnaBundle:Offre")->findBy(array('nbrchambre'=>$offre->getNbrchambre()));
       

       }
 return $this->render("ProjetDarnaBundle:Logement:rechercherLogement.html.twig", array('offre'=>$form->createView(),'offres'=>$offres));
       
       }
    
    
}

