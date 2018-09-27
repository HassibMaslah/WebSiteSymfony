<?php

/* testBundle:Default:index.html.twig */
class __TwigTemplate_51cd7b42481732b476ae1f84fabe86bf228ddfd33adf44e63eb47d3ed948761e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testBundle::layout.html.twig", "testBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8392e23f68243c795ebc105af7337045abf16821e0247d8fd521a93c1e1325c = $this->env->getExtension("native_profiler");
        $__internal_d8392e23f68243c795ebc105af7337045abf16821e0247d8fd521a93c1e1325c->enter($__internal_d8392e23f68243c795ebc105af7337045abf16821e0247d8fd521a93c1e1325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8392e23f68243c795ebc105af7337045abf16821e0247d8fd521a93c1e1325c->leave($__internal_d8392e23f68243c795ebc105af7337045abf16821e0247d8fd521a93c1e1325c_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'testBundle::layout.html.twig' %}*/
