<?php

/* testBundle:Default:Administration/slider.html.twig */
class __TwigTemplate_79f41e520cd9c8b859586f86857fc502d5ccfb9efb528d09ff6773ec6df938d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle:Default:Administration/slider.html.twig", 1);
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
        $__internal_8e597e8fd72f956fc08c09fc0785cee6301511dd060114e6f8f94a47a047c908 = $this->env->getExtension("native_profiler");
        $__internal_8e597e8fd72f956fc08c09fc0785cee6301511dd060114e6f8f94a47a047c908->enter($__internal_8e597e8fd72f956fc08c09fc0785cee6301511dd060114e6f8f94a47a047c908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Default:Administration/slider.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e597e8fd72f956fc08c09fc0785cee6301511dd060114e6f8f94a47a047c908->leave($__internal_8e597e8fd72f956fc08c09fc0785cee6301511dd060114e6f8f94a47a047c908_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68d57400eef6e2a8af5d905148f6306acd60c6a1d7c52b7b2af826394a111459 = $this->env->getExtension("native_profiler");
        $__internal_68d57400eef6e2a8af5d905148f6306acd60c6a1d7c52b7b2af826394a111459->enter($__internal_68d57400eef6e2a8af5d905148f6306acd60c6a1d7c52b7b2af826394a111459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   

";
        // line 7
        echo "<form class=\"\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"file-upload\">
    <h1>ADD SLIDERS</h1>
    <h5 class=\"message wow fadeInLeft animated\" data-wow-delay=\"0.5s\" >";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "</h5>
      <label>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo ":</label><br>
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
      ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "<br>
      <label>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtitle", array()), 'label');
        echo ":</label><br>
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtitle", array()), 'widget');
        echo "
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "<br>
      <label>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo ":</label><br>
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "<br>
    
    
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" value=\"ADD\" class=\"file-upload-btn\">
    </div>
</form> 
 <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slider", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
           <input type=\"submit\" value=\" Back to the list\" class=\"file-upload-btn\"> 
        </a>
    ";
        // line 30
        echo "    <!-- index JS (login)-->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/js/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_68d57400eef6e2a8af5d905148f6306acd60c6a1d7c52b7b2af826394a111459->leave($__internal_68d57400eef6e2a8af5d905148f6306acd60c6a1d7c52b7b2af826394a111459_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Default:Administration/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  106 => 30,  100 => 26,  93 => 22,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*   */
/*    {% block body %}*/
/*    */
/* */
/* {#{ form_start(form) }#}*/
/* <form class="" method="POST" {{ form_enctype(form) }}>*/
/*     <div class="file-upload">*/
/*     <h1>ADD SLIDERS</h1>*/
/*     <h5 class="message wow fadeInLeft animated" data-wow-delay="0.5s" >{{msg}}</h5>*/
/*       <label>{{ form_label(form.title) }}:</label><br>*/
/*       {{ form_widget(form.title) }}*/
/*       {{ form_errors(form.title) }}<br>*/
/*       <label>{{ form_label(form.subtitle) }}:</label><br>*/
/*       {{ form_widget(form.subtitle) }}*/
/*       {{ form_errors(form.title) }}<br>*/
/*       <label>{{ form_label(form.file) }}:</label><br>*/
/*       {{ form_widget(form.file) }}*/
/*       {{ form_errors(form.file) }}<br>*/
/*     */
/*     */
/*     {{ form_rest(form) }}*/
/*     <input type="submit" value="ADD" class="file-upload-btn">*/
/*     </div>*/
/* </form> */
/*  <a href="{{ path('slider',{'name': name }) }}">*/
/*            <input type="submit" value=" Back to the list" class="file-upload-btn"> */
/*         </a>*/
/*     {#{ form_end(form) }#}*/
/*     <!-- index JS (login)-->*/
/*     <script src="{{asset('bundles/test/js/index.js')}}"></script>*/
/* {% endblock %}*/
