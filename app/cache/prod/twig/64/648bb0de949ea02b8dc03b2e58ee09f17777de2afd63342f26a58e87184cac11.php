<?php

/* testBundle:Slider:show.html.twig */
class __TwigTemplate_37b3397baced4c114d83a22ecff131c543da9b67429ada2890721cfd34701d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle:Slider:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e2f04899b3efe6b490145bc9e151eca68d067f9549f8a09af5642aa36a61afb = $this->env->getExtension("native_profiler");
        $__internal_2e2f04899b3efe6b490145bc9e151eca68d067f9549f8a09af5642aa36a61afb->enter($__internal_2e2f04899b3efe6b490145bc9e151eca68d067f9549f8a09af5642aa36a61afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Slider:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e2f04899b3efe6b490145bc9e151eca68d067f9549f8a09af5642aa36a61afb->leave($__internal_2e2f04899b3efe6b490145bc9e151eca68d067f9549f8a09af5642aa36a61afb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3db1d3d1a49d4a8a391289318014a5f31363d483e068e90418fdff5843efde = $this->env->getExtension("native_profiler");
        $__internal_fd3db1d3d1a49d4a8a391289318014a5f31363d483e068e90418fdff5843efde->enter($__internal_fd3db1d3d1a49d4a8a391289318014a5f31363d483e068e90418fdff5843efde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"titleTab\">
    <h1>Slider ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h1>
    </div>

    <table class=\"record_properties\" border=1;>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subtitle</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtitle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>image</th>
                <td><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/test/uploads/sliders/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\"/></td>
            </tr>
            
        </tbody>
    </table>
    <li>";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
    <Button>Edit</Button>
    </a>
    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\" Back to the list\" class=\"file-upload-btn\">  
    </a>
    
";
        
        $__internal_fd3db1d3d1a49d4a8a391289318014a5f31363d483e068e90418fdff5843efde->leave($__internal_fd3db1d3d1a49d4a8a391289318014a5f31363d483e068e90418fdff5843efde_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Slider:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  93 => 34,  89 => 33,  81 => 28,  74 => 24,  67 => 20,  60 => 16,  53 => 12,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="titleTab">*/
/*     <h1>Slider {{ entity.id }}</h1>*/
/*     </div>*/
/* */
/*     <table class="record_properties" border=1;>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ entity.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Subtitle</th>*/
/*                 <td>{{ entity.subtitle }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Path</th>*/
/*                 <td>{{ entity.path }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>image</th>*/
/*                 <td><img src="{{asset('bundles/test/uploads/sliders/' ~ entity.path)}}"/></td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/*     <li>{{ form(delete_form) }}</li>*/
/*     <a href="{{ path('slider_edit', { 'id': entity.id,'name': name }) }}">*/
/*     <Button>Edit</Button>*/
/*     </a>*/
/*     <a href="{{ path('slider',{'name': name }) }}">*/
/*     <input type="submit" value=" Back to the list" class="file-upload-btn">  */
/*     </a>*/
/*     */
/* {% endblock %}*/
/* */
