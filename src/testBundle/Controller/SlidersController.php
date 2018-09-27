<?php

namespace testBundle\Controller;

use testBundle\Entity\Slider;
use testBundle\Form\SliderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SlidersController extends Controller
{
    public function sliderAction($name)
    {
        $Msg="";
        $Slider=new Slider();
        $form=$this->createForm(new SliderType(),$Slider);

        $entityManager = $this->getDoctrine()->getManager();
        $request=$this->getRequest();

        if($request->getMethod()=="POST"){
            $form->handleRequest($request);
            if ($form->isValid()){
                $Slider->upload();
                $entityManager->persist($Slider);
                $entityManager->flush();
                $Msg="*ADD finish with Success!";
            }
            else{
                $Msg="*failure of ADD!";
            }
        }


        return $this->render('testBundle:Default:Administration/slider.html.twig',array(
            'form'=>$form->createView(),'msg'=>$Msg,
            'name' => $name
            ));
    }
}