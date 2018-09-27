<?php

/* testBundle:Default:Administration/eventt.html.twig */
class __TwigTemplate_1d813941b0c03de4ac5195073ca91e43048d78c22247bcc4bc7fca95c0bef38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "testBundle:Default:Administration/eventt.html.twig", 1);
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
        $__internal_4c4e1adfc06e5c5dc1688d0ab928653b81b57264441c686631362162105b463a = $this->env->getExtension("native_profiler");
        $__internal_4c4e1adfc06e5c5dc1688d0ab928653b81b57264441c686631362162105b463a->enter($__internal_4c4e1adfc06e5c5dc1688d0ab928653b81b57264441c686631362162105b463a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBundle:Default:Administration/eventt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c4e1adfc06e5c5dc1688d0ab928653b81b57264441c686631362162105b463a->leave($__internal_4c4e1adfc06e5c5dc1688d0ab928653b81b57264441c686631362162105b463a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cba8f9abf74cb5a9cca4d73b2fcdf5559113bfa07467abd71f5085a4693a25 = $this->env->getExtension("native_profiler");
        $__internal_33cba8f9abf74cb5a9cca4d73b2fcdf5559113bfa07467abd71f5085a4693a25->enter($__internal_33cba8f9abf74cb5a9cca4d73b2fcdf5559113bfa07467abd71f5085a4693a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- styleadmin CSS -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/css/styleadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <form class=\"\">
    <div class=\"file-upload\">
    <h1>ADD EVENTS</h1>
      <label>Event name:</label><br>
      <input type=\"text\" placeholder=\"name...\"/><br>
      <label>Event description:</label><br>
      <input type=\"text\" placeholder=\"description...\"/><br>
      <label>Event date:</label><br>
      <input type=\"text\" placeholder=\"y-m-d\"/>
     

      
      <button class=\"file-upload-btn\" type=\"button\" onclick=\"\$('.file-upload-input').trigger( 'click' )\">Add Image</button>

      <div class=\"image-upload-wrap\">
        <input class=\"file-upload-input\" type='file' onchange=\"readURL(this);\" accept=\"image/*\" />
        <div class=\"drag-text\">
          <h3>Drag and drop a file or select add Image</h3>
        </div>
      </div>
      <div class=\"file-upload-content\">
        <img class=\"file-upload-image\" src=\"#\" alt=\"your image\" />
        <div class=\"image-title-wrap\">
          <button type=\"button\" onclick=\"removeUpload()\" class=\"remove-image\">Remove <span class=\"image-title\">Uploaded Image</span></button>
        </div>
      </div>
      
      <button class=\"file-upload-btn\" onclick=\"Upload()\">Create</button>
      </div>
    </form> 
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin2", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\" Return to Administration page \" class=\"file-upload-btn\">
        </a>
    <!-- index JS (login)-->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/test/js/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_33cba8f9abf74cb5a9cca4d73b2fcdf5559113bfa07467abd71f5085a4693a25->leave($__internal_33cba8f9abf74cb5a9cca4d73b2fcdf5559113bfa07467abd71f5085a4693a25_prof);

    }

    public function getTemplateName()
    {
        return "testBundle:Default:Administration/eventt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  79 => 38,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/*   */
/*    {% block body %}*/
/*     <!-- styleadmin CSS -->*/
/*     <link href="{{asset('bundles/test/css/styleadmin.css')}}" rel="stylesheet">*/
/* */
/* */
/*     <form class="">*/
/*     <div class="file-upload">*/
/*     <h1>ADD EVENTS</h1>*/
/*       <label>Event name:</label><br>*/
/*       <input type="text" placeholder="name..."/><br>*/
/*       <label>Event description:</label><br>*/
/*       <input type="text" placeholder="description..."/><br>*/
/*       <label>Event date:</label><br>*/
/*       <input type="text" placeholder="y-m-d"/>*/
/*      */
/* */
/*       */
/*       <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>*/
/* */
/*       <div class="image-upload-wrap">*/
/*         <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />*/
/*         <div class="drag-text">*/
/*           <h3>Drag and drop a file or select add Image</h3>*/
/*         </div>*/
/*       </div>*/
/*       <div class="file-upload-content">*/
/*         <img class="file-upload-image" src="#" alt="your image" />*/
/*         <div class="image-title-wrap">*/
/*           <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       <button class="file-upload-btn" onclick="Upload()">Create</button>*/
/*       </div>*/
/*     </form> */
/*         <a href="{{ path('admin2',{'name': name }) }}">*/
/*         <input type="submit" value=" Return to Administration page " class="file-upload-btn">*/
/*         </a>*/
/*     <!-- index JS (login)-->*/
/*     <script src="{{asset('bundles/test/js/index.js')}}"></script>*/
/* {% endblock %}*/
