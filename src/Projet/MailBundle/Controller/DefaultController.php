<?php

namespace Projet\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\MailBundle\Entity\Mail;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('ProjetMailBundle:Default:index.html.twig', array('name' => $name));
    }

    public function redirectionAction() {
        return $this->render('ProjetMailBundle:Default:formMail.html.twig');
    }

    public function sendMailAction($mail) {
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $Subject = $request->get("question");
            $email = $request->get("email");
            $message = $request->get("reponse");
            $mailer = $this->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('agenceespritpidev@gmail.com')
                    ->setPassword('123456789Mm!');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Test')
                    ->setSubject($Subject)
                    ->setFrom('agenceespritpidev@gmail.com')
                    ->setTo($email)
                    ->setBody($message);
            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('ListRec'));   
        }
        return $this->render('ProjetMailBundle:Default:formMail.html.twig', array('mail' => $mail));
    }

}
