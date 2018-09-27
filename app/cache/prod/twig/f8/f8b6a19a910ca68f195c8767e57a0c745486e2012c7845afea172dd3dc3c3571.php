<?php

/* testBundle:Default:contact.html.twig */
class __TwigTemplate_0f68bba816acf650c9dfd4bffb9ce830c1acc1f421a83cb82ca18e033911c4b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testBundle::layoutcontact.html.twig", "testBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBundle::layoutcontact.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66f4bc6dfbae165f89767baf11ad9676dc742b05b620fdc09fd5a924be3b9471 = $this->env->getExtension("native_profiler");
        $__internal_66f4bc6dfbae165f89767baf11ad9676dc742b05b620fdc09fd5a924be3b9471->enter($__internal_66f4bc6dfbae165f89767baf11ad9676dc742b05b620fdc09fd5a924be3b9471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f4bc6dfbae165f89767baf11ad9676dc742b05b620fdc09fd5a924be3b9471->leave($__internal_66f4bc6dfbae165f89767baf11ad9676dc742b05b620fdc09fd5a924be3b9471_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Default:contact.html.twig";
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
/* {% extends 'testBundle::layoutcontact.html.twig' %}*/
