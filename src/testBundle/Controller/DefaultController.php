<?php

namespace testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use testBundle\Entity\Evenement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{   // index 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Sliders = $em->getRepository('testBundle:Slider')->findAll();

        return $this->render('testBundle:Default:index.html.twig', array(
            'Sliders' => $Sliders,
        ));

      //  return $this->render('testBundle:Default:index.html.twig');
    }
    // error 404 
    public function errorAction()
    {
        return $this->render('testBundle:Default:404.html.twig');
    }
    // contact 
    public function contactAction()
    {
        return $this->render('testBundle:Default:contact.html.twig');
    }
    //services
    public function servicesAction()
    {
        return $this->render('testBundle:Default:services.html.twig');
    }
    //training
    public function trainingAction()
    {
        return $this->render('testBundle:Default:training.html.twig');
    }
    //references
    public function referencesAction()
    {
        return $this->render('testBundle:Default:references.html.twig');
    }
    //activity
    public function activityAction()
    {
        return $this->render('testBundle:Default:activity.html.twig');
    }
    //redirection
    public function redirectionAction()
    {
        return $this->render('testBundle:Default:contact.html.twig');
    }
    //sendMail
    public function sendMailAction()
    {
        $Request= $this ->getRequest();

      if($Request ->getMethod()== "POST"){

          $name= $Request -> get("name");
          $email = $Request -> get("email");
          $sujet = $Request -> get("subject");
          $message = $Request -> get("message");

          $mailer = $this->container->get('mailer');
          $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl')
                  ->setUsername('******')
                  ->setPassword('******');
          $mailer=\Swift_Mailer::newInstance($transport);
        
           $sms = \Swift_Message::newInstance('Test')
                   ->setSubject($sujet)
                   ->setFrom($email)
                   ->setTo('contact@telcotec.tn')
                   ->setBody($message);

           /* $spool = $mailer->getTransport()->getSpool();
            $transport = $this->get('swiftmailer.transport.real');

            $spool->flushQueue($transport);*/
            $this->get('mailer')->send($sms);

      }


        return $this->render('testBundle:Default:contact.html.twig');
    }

}
