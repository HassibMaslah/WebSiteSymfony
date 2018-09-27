<?php

/* testBundle:Default:services.html.twig */
class __TwigTemplate_778ee005c9c596d8be59c78e108df5a6abaa91382e57d29f87ac76fece963c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("testBundle::layoutservices.html.twig", "testBundle:Default:services.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBundle::layoutservices.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98451dcc34ba9c385d82390db97a757c3da4a8b4a660cc863ca4403e85d1373e = $this->env->getExtension("native_profiler");
        $__internal_98451dcc34ba9c385d82390db97a757c3da4a8b4a660cc863ca4403e85d1373e->enter($__internal_98451dcc34ba9c385d82390db97a757c3da4a8b4a660cc863ca4403e85d1373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98451dcc34ba9c385d82390db97a757c3da4a8b4a660cc863ca4403e85d1373e->leave($__internal_98451dcc34ba9c385d82390db97a757c3da4a8b4a660cc863ca4403e85d1373e_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Default:services.html.twig";
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
/* {% extends 'testBundle::layoutservices.html.twig' %}*/
