<?php

/* testBundle:Slider:edit.html.twig */
class __TwigTemplate_f84d5d85533b6d820c72b737096e7ac5f3ee5be0b9cc3aea1257260d4ea72e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle:Slider:edit.html.twig", 1);
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
        $__internal_72535975d1d65f1cff29d39d3b1ff58a645bce9ecea6f8d0757d691ca6238830 = $this->env->getExtension("native_profiler");
        $__internal_72535975d1d65f1cff29d39d3b1ff58a645bce9ecea6f8d0757d691ca6238830->enter($__internal_72535975d1d65f1cff29d39d3b1ff58a645bce9ecea6f8d0757d691ca6238830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Slider:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72535975d1d65f1cff29d39d3b1ff58a645bce9ecea6f8d0757d691ca6238830->leave($__internal_72535975d1d65f1cff29d39d3b1ff58a645bce9ecea6f8d0757d691ca6238830_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_360a701e7879f149dc0db41e0b2b9596ca660179e5c095ba014c40dd15490681 = $this->env->getExtension("native_profiler");
        $__internal_360a701e7879f149dc0db41e0b2b9596ca660179e5c095ba014c40dd15490681->enter($__internal_360a701e7879f149dc0db41e0b2b9596ca660179e5c095ba014c40dd15490681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<form class=\"\" method=\"PUT\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    <div class=\"file-upload\">
    <h1>EDIT SLIDER ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h1>
      <label>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo ":</label><br>
      ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "<br>
      <label>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "subtitle", array()), 'label');
        echo ":</label><br>
      ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "subtitle", array()), 'widget');
        echo "
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "<br>
      <label>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo ":</label><br>
      ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'errors');
        echo "<br>
    
    
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
    <!--input type=\"submit\" value=\"Update\" class=\"file-upload-btn\"-->
    </div>
</form> 


 
<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\" Back to the list\" class=\"file-upload-btn\">  
    </a>
";
        
        $__internal_360a701e7879f149dc0db41e0b2b9596ca660179e5c095ba014c40dd15490681->leave($__internal_360a701e7879f149dc0db41e0b2b9596ca660179e5c095ba014c40dd15490681_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Slider:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  88 => 18,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <form class="" method="PUT" {{ form_enctype(edit_form) }}>*/
/*     <div class="file-upload">*/
/*     <h1>EDIT SLIDER {{entity.id}}</h1>*/
/*       <label>{{ form_label(edit_form.title) }}:</label><br>*/
/*       {{ form_widget(edit_form.title) }}*/
/*       {{ form_errors(edit_form.title) }}<br>*/
/*       <label>{{ form_label(edit_form.subtitle) }}:</label><br>*/
/*       {{ form_widget(edit_form.subtitle) }}*/
/*       {{ form_errors(edit_form.title) }}<br>*/
/*       <label>{{ form_label(edit_form.file) }}:</label><br>*/
/*       {{ form_widget(edit_form.file) }}*/
/*       {{ form_errors(edit_form.file) }}<br>*/
/*     */
/*     */
/*     {{ form_rest(edit_form) }}*/
/*     <!--input type="submit" value="Update" class="file-upload-btn"-->*/
/*     </div>*/
/* </form> */
/* */
/* */
/*  */
/* <a href="{{ path('slider',{'name': name }) }}">*/
/*     <input type="submit" value=" Back to the list" class="file-upload-btn">  */
/*     </a>*/
/* {% endblock %}*/
/* */
