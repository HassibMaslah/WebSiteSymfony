<?php

/* testBundle:Slider:index.html.twig */
class __TwigTemplate_42858e0c930f0ef35af61ddd8e8da50ce91caeacd50bbadfd13b7036976abf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle:Slider:index.html.twig", 1);
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
        $__internal_6eb8c92afec516548dce37297c0ae21b4a5411f696571b399065f5acc7b5158b = $this->env->getExtension("native_profiler");
        $__internal_6eb8c92afec516548dce37297c0ae21b4a5411f696571b399065f5acc7b5158b->enter($__internal_6eb8c92afec516548dce37297c0ae21b4a5411f696571b399065f5acc7b5158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Slider:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb8c92afec516548dce37297c0ae21b4a5411f696571b399065f5acc7b5158b->leave($__internal_6eb8c92afec516548dce37297c0ae21b4a5411f696571b399065f5acc7b5158b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_066e4782d32166fe4f1a90a35c0f20a2323d9e911e324e13d874537a96ed7459 = $this->env->getExtension("native_profiler");
        $__internal_066e4782d32166fe4f1a90a35c0f20a2323d9e911e324e13d874537a96ed7459->enter($__internal_066e4782d32166fe4f1a90a35c0f20a2323d9e911e324e13d874537a96ed7459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"titleTab\">
    <h1>Slider list</h1>
    </div>
    <section>
  <!--for demo wrap-->
  <div class=\"tbl-header\">
    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
      <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Path</th>
            <th> images </th>
            <th> Actions </th>
        </tr>
      </thead>
    </table>
  </div>
  <div class=\"tbl-content\">
    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
      <tbody>
      ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "        <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subtitle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "path", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/test/uploads/sliders/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\"/>
                </td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\"> show </a><br>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider_edit", array("id" => $this->getAttribute($context["entity"], "id", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\"> edit </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </tbody>
    </table>
  </div>
</section>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addSlider", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\" New Slider \" class=\"file-upload-btn\">
        </a>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin2", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\" Return to Administration page \" class=\"file-upload-btn\">
        </a>
    ";
        
        $__internal_066e4782d32166fe4f1a90a35c0f20a2323d9e911e324e13d874537a96ed7459->leave($__internal_066e4782d32166fe4f1a90a35c0f20a2323d9e911e324e13d874537a96ed7459_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Slider:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  115 => 44,  109 => 40,  99 => 36,  95 => 35,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  71 => 28,  68 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="titleTab">*/
/*     <h1>Slider list</h1>*/
/*     </div>*/
/*     <section>*/
/*   <!--for demo wrap-->*/
/*   <div class="tbl-header">*/
/*     <table cellpadding="0" cellspacing="0" border="0">*/
/*       <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Title</th>*/
/*             <th>Subtitle</th>*/
/*             <th>Path</th>*/
/*             <th> images </th>*/
/*             <th> Actions </th>*/
/*         </tr>*/
/*       </thead>*/
/*     </table>*/
/*   </div>*/
/*   <div class="tbl-content">*/
/*     <table cellpadding="0" cellspacing="0" border="0">*/
/*       <tbody>*/
/*       {% for entity in entities %}*/
/*         <tr>*/
/*                 <td><a href="{{ path('slider_show', { 'id': entity.id ,'name': name}) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.title }}</td>*/
/*                 <td>{{ entity.subtitle }}</td>*/
/*                 <td>{{ entity.path }}</td>*/
/*                 <td><img src="{{asset('bundles/test/uploads/sliders/'~entity.path)}}"/>*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="{{ path('slider_show', { 'id': entity.id ,'name': name}) }}"> show </a><br>*/
/*                     <a href="{{ path('slider_edit', { 'id': entity.id ,'name': name}) }}"> edit </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </section>*/
/*         <a href="{{ path('addSlider',{'name': name }) }}">*/
/*         <input type="submit" value=" New Slider " class="file-upload-btn">*/
/*         </a>*/
/*         <a href="{{ path('admin2',{'name': name }) }}">*/
/*         <input type="submit" value=" Return to Administration page " class="file-upload-btn">*/
/*         </a>*/
/*     {% endblock %}*/
/* */
