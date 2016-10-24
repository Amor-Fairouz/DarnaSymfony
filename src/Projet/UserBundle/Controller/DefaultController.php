<?php

namespace Projet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjetUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
