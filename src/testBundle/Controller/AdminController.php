<?php

namespace testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use testBundle\Entity\Login;
use testBundle\Modals\LoginTest;

class AdminController extends Controller
{
    public function adminAction(Request $request) {
        
        $session = $this->getRequest()->getSession();
        $em2 = $this->getDoctrine()->getEntityManager();
        $repository = $em2->getRepository('testBundle:Login');

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $remember = $request->get('remember');
            $user = $repository->findBy(array('username'=>$username,'password'=>$password));
            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new LoginTest();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }
                return $this->render('testBundle:Default:Administration/administration.html.twig', array('name' => $username));
            
            } else {
                return $this->render('testBundle:Default:404.html.twig', array('error' => 'Login Error'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findBy(array('username'=>$username,'password'=>$password));
                if ($user) {
                    return $this->render('testBundle:Default:Administration/administration.html.twig', array('name' => $username));
                }
            }
            return $this->render('testBundle:Default:index.html.twig');
        }
        //return $this->render('testBundle:Default:Administration/administration.html.twig');
    }
    public function admin2Action($name) {
        return $this->render('testBundle:Default:Administration/administration.html.twig', array('name' => $name));
    }
     //logout
     public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();

        $em3 = $this->getDoctrine()->getManager();
        $Sliders = $em3->getRepository('testBundle:Slider')->findAll();

        return $this->render('testBundle:Default:index.html.twig', array(
            'Sliders' => $Sliders
        ));
    }
}
