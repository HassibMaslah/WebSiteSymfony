<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_893708bc5cada7cc5a9f7bae3e26b324ac149065d69cb277f500dd759c12b6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e14934d0f16c9d0648b4d3e974f703b3c754bc76c11fc5ad100a45f1e3f8b86a = $this->env->getExtension("native_profiler");
        $__internal_e14934d0f16c9d0648b4d3e974f703b3c754bc76c11fc5ad100a45f1e3f8b86a->enter($__internal_e14934d0f16c9d0648b4d3e974f703b3c754bc76c11fc5ad100a45f1e3f8b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14934d0f16c9d0648b4d3e974f703b3c754bc76c11fc5ad100a45f1e3f8b86a->leave($__internal_e14934d0f16c9d0648b4d3e974f703b3c754bc76c11fc5ad100a45f1e3f8b86a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_156353a4398534f9cf7ddc5117ed12dccd71a3738b27a80a03ed0f9714fc26c0 = $this->env->getExtension("native_profiler");
        $__internal_156353a4398534f9cf7ddc5117ed12dccd71a3738b27a80a03ed0f9714fc26c0->enter($__internal_156353a4398534f9cf7ddc5117ed12dccd71a3738b27a80a03ed0f9714fc26c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_156353a4398534f9cf7ddc5117ed12dccd71a3738b27a80a03ed0f9714fc26c0->leave($__internal_156353a4398534f9cf7ddc5117ed12dccd71a3738b27a80a03ed0f9714fc26c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f216f542ccc87093364d7a3883d26ceda9b9b2bbb15b4cb08180f778a269a7a1 = $this->env->getExtension("native_profiler");
        $__internal_f216f542ccc87093364d7a3883d26ceda9b9b2bbb15b4cb08180f778a269a7a1->enter($__internal_f216f542ccc87093364d7a3883d26ceda9b9b2bbb15b4cb08180f778a269a7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f216f542ccc87093364d7a3883d26ceda9b9b2bbb15b4cb08180f778a269a7a1->leave($__internal_f216f542ccc87093364d7a3883d26ceda9b9b2bbb15b4cb08180f778a269a7a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c257a11f7361b3734b21d42c4f1490bfe71747e9d540eba47c8a67cac6b2bde6 = $this->env->getExtension("native_profiler");
        $__internal_c257a11f7361b3734b21d42c4f1490bfe71747e9d540eba47c8a67cac6b2bde6->enter($__internal_c257a11f7361b3734b21d42c4f1490bfe71747e9d540eba47c8a67cac6b2bde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c257a11f7361b3734b21d42c4f1490bfe71747e9d540eba47c8a67cac6b2bde6->leave($__internal_c257a11f7361b3734b21d42c4f1490bfe71747e9d540eba47c8a67cac6b2bde6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
