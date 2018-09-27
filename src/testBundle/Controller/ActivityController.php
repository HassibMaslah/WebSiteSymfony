<?php

namespace testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivityController extends Controller
{
    public function activity1Action()
    {
        return $this->render('testBundle:Default:activity/activity1.html.twig');
    }
    public function activity2Action()
    {
        return $this->render('testBundle:Default:activity/activity2.html.twig');
    }
    public function activity3Action()
    {
        return $this->render('testBundle:Default:activity/activity3.html.twig');
    }
    public function activity4Action()
    {
        return $this->render('testBundle:Default:activity/activity4.html.twig');
    }
    public function activity5Action()
    {
        return $this->render('testBundle:Default:activity/activity5.html.twig');
    }
    public function activity6Action()
    {
        return $this->render('testBundle:Default:activity/activity6.html.twig');
    }
    public function activity7Action()
    {
        return $this->render('testBundle:Default:activity/activity7.html.twig');
    }
}
