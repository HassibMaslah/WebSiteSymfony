<?php

namespace testBundle\Controller;

use testBundle\Entity\Evenement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventtController extends Controller
{
    public function eventtAction($name)
    {
        return $this->render('testBundle:Default:Administration/eventt.html.twig',array('name' => $name,));
    }
     // create events 
     public function createAction()
     {
        
         $Event = new Evenement();
         $Event->setName('WC2018');
         $Event->setDescription('World Cup 2018');
         $Event->setDate(new \DateTime("22-07-2018"));
         $Event2 = new Evenement();
         $Event2->setName('WC2022');
         $Event2->setDescription('World Cup 2022');
         $Event2->setDate(new \DateTime("22-07-2022"));
       
     
         $entityManager = $this->getDoctrine()->getManager();
     
         // tells Doctrine you want to (eventually) save the Product (no queries yet)
         $entityManager->persist($Event);
         $entityManager->persist($Event2);
     
         // actually executes the queries (i.e. the INSERT query)
         $entityManager->flush();
     
         return new Response('Saved new product with id '.$Event->getId());
     }
     
}
